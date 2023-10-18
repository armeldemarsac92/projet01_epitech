<?php

namespace App\Controller;

use App\Repository\JobOfferRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;

class JobOfferController extends AbstractController
{
    #[Route('api/job_offers', name: 'fetch_job_offers')]
    public function fetchJobOffers(
        JobOfferRepository $jobOfferRepository,
        #[MapQueryParameter] ?string $searchTerm = null,
        #[MapQueryParameter] ?string $maxResults = null
    ): Response {


        if (!$searchTerm) {
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

    return $this->json($jobOfferData);

    }
}
