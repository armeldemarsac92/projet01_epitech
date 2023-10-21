<?php

namespace App\Controller;

use App\Repository\JobOfferRepository;
use App\Entity\JobOffer;
use App\Entity\Enterprise;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Doctrine\ORM\EntityManagerInterface;

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
}
