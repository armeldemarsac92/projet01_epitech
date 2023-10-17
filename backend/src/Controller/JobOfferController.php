<?php

namespace App\Controller;

use App\Repository\JobOfferRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class JobOfferController extends AbstractController
{
    /**
     * @Route("/job-offers/", name="job_offers")
     */
    public function fetchJobOffers(JobOfferRepository $jobOfferRepository, Request $request): Response
    {
        $searchTerm = $request->query->get('search');
        $maxResults = $request->query->get('results');

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

            ];
        }

    return $this->json($jobOfferData);

    }
}
