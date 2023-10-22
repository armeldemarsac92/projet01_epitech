<?php

namespace App\Controller;

use App\Entity\Candidate;
use App\Entity\HasApplied;
use App\Entity\HasFaved;
use App\Repository\JobOfferRepository;
use App\Repository\CandidateRepository;
use App\Repository\HasAppliedRepository;
use App\Repository\HasFavedRepository;
use App\Entity\JobOffer;
use App\Entity\Enterprise;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;


class JobOfferController extends AbstractController
{
    #[Route('api/public/job_offers', name: 'get_job_offers', methods: ['GET'])]
    public function fetchJobOffers(
        JobOfferRepository $jobOfferRepository,
        EntityManagerInterface $entityManager,
        Request $request
    ): JsonResponse {
        
        $searchTerm = $request->query->get('searchTerm');
        $maxResults = $request->query->get('maxResults');
        $enterpriseId = $request->query->get('enterpriseId');

        if ($enterpriseId) {
            $jobOffers = $entityManager->getRepository(JobOffer::class)->findBy(['offer_enterprise'=> $enterpriseId]);
        } elseif (!$searchTerm && !$enterpriseId) {
            $jobOffers = $jobOfferRepository->findByName(null, $maxResults);
        } else {
            $jobOffers = $jobOfferRepository->findByName($searchTerm, $maxResults);
        }
        

        $jobOfferData = [];

        foreach ($jobOffers as $jobOffer) {
            $id = $jobOffer->getId();
            $tools = [];
            $competences = [];

            foreach($jobOffer->getOfferTool() as $requiredTool) {
                $tools[] = $requiredTool->getTool()->getToolName();
            }

            foreach($jobOffer->getOfferCompetence() as $requiredCompetence) {
                $competences[] = $requiredCompetence->getCompetence()->getcompetenceName();
            }

            $ContractTypeEntity = $jobOffer->getContractType();

            $jobOfferData[] = [
                'id' => $jobOffer->getId(),
                'title' => $jobOffer->getOfferTitle(),
                'enterprise' => $jobOffer->getOfferEnterprise()->getEnterpriseName(),
                'published_on' => $jobOffer->getOfferPublicationDate(),
                'about' => $jobOffer->getOfferAbout(),
                'task' => $jobOffer->getOfferExpectedWork(),
                'tools' => $tools,
                'competences' => $competences,
                'studies' => $jobOffer->getOfferStudies(),
                'salary' => $jobOffer->getOfferAnnualSalary(),
                'application' => $jobOfferRepository->getElementCount('offer_whohas_applied',$id),
                'favorite' => $jobOfferRepository->getElementCount('offer_whohas_faved', $id),
                'contract' => $ContractTypeEntity->getContractType()->getContractType(),
                'contract_length' => $ContractTypeEntity->getContractLength()->getContractLength(),
                'localisation' => $jobOffer->getOfferEnterprise()->getEnterpriseLocalisation(),

            ];
        }

        return new JsonResponse($jobOfferData);

    }


    #[route('api/candidate/apply', name: 'apply_to_job_offer', methods:['POST'])]

    public function applyToJobOffer(
        JobOfferRepository $jobOfferRepository,
        HasAppliedRepository $HasAppliedRepository,
        EntityManagerInterface $entityManager,
        CandidateRepository $candidateRepository,
        Security $security,
        Request $request
    ):JsonResponse{

        $data = json_decode($request->getContent(), true);

        $offer_id = $data['offer_id'] ?? null;

        if ($offer_id === null) {
            return new JsonResponse(['offer_id' => 'null']);
        }
        $offer = $entityManager->getRepository(JobOffer::class)->find($offer_id);
        $candidate = $security->getUser();
        if (null === $candidate || !($candidate instanceof Candidate)) {
            return new JsonResponse(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }

        $existingApplications = $HasAppliedRepository->findByCandidateAndOffer($candidate, $offer_id);

        if (null === $existingApplications) {

        $application = new HasApplied();
        $application->setOffer($offer);
        $application->setCandidate($candidate);
        $entityManager->persist($application);
        $entityManager->flush();

        

        foreach($candidate->getCandidateApplications() as $candidateApplication) {
            $applications[] = $candidateApplication->getOffer()->getId();
        }

        return new JsonResponse(['candidate_applications' => $applications,'offer_id' => $offer_id,'offer_applications' => $jobOfferRepository->getElementCount('offer_whohas_applied',$offer_id),], Response::HTTP_OK);

        } else {
            return new JsonResponse(['error'=> 'candidate has already applied'], Response::HTTP_NO_CONTENT);
        }
        
    }

    #[route('api/candidate/like', name: 'like_job_offer', methods:['POST'])]

    public function likeJobOffer(
        JobOfferRepository $jobOfferRepository,
        HasFavedRepository $HasFavedRepository,
        EntityManagerInterface $entityManager,
        CandidateRepository $candidateRepository,
        Security $security,
        Request $request
    ):JsonResponse{

        $data = json_decode($request->getContent(), true);

        $offer_id = $data['offer_id'] ?? null;

        if ($offer_id === null) {
            return new JsonResponse(['offer_id' => 'null']);
        }
        $offer = $entityManager->getRepository(JobOffer::class)->find($offer_id);
        $candidate = $security->getUser();
        if (null === $candidate || !($candidate instanceof Candidate)) {
            return new JsonResponse(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }

        $existingLikes = $HasFavedRepository->findByCandidateAndOffer($candidate, $offer_id);



        if (null === $existingLikes) {

        $favorite = new HasFaved();
        $favorite->setOffer($offer);
        $favorite->setCandidate($candidate);
        $entityManager->persist($favorite);
        $entityManager->flush();

        
        foreach($candidate->getCandidateFavorite() as $candidateFavorite) {
            $favorites[] = $candidateFavorite->getOffer()->getId();
        }


        return new JsonResponse(['candidate_likes' => $favorites,'offer_id' => $offer_id,'offer_favorites' => $jobOfferRepository->getElementCount('offer_whohas_faved',$offer_id),], Response::HTTP_OK);

        } else {

            $entityManager->remove($existingLikes);
            $entityManager->flush();

            foreach($candidate->getCandidateFavorite() as $candidateFavorite) {
                $favorites[] = $candidateFavorite->getOffer()->getId();
            }

            return new JsonResponse(['candidate_likes' => $favorites,'offer_id' => $offer_id,'offer_favorites' => $jobOfferRepository->getElementCount('offer_whohas_faved',$offer_id),], Response::HTTP_OK);
        }
        
    }

}
