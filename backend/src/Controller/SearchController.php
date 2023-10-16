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

        if (!$searchTerm) {
            $jobOffers = $jobOfferRepository->findAll();
        } else {
            $jobOffers = $jobOfferRepository->findByName($searchTerm);
        }

        foreach ($jobOffers as $jobOffer) {
            $id = $jobOffer->getId();
            $title = $jobOffer->getOfferTitle();
            $about = $jobOffer->getOfferAbout();
            $tasks = $jobOffer->getOfferExpectedWork();
            $tools = $jobOffer->getOfferTool();
            $competences = $jobOffer->getOfferCompetence();
            $enterprise = $jobOffer->getOfferEnterprise();
            $studies = $jobOffer->getOfferStudies();
            $salary = $jobOffer->getOfferAnnualSalary();
            $applicationCount = $jobOfferRepository->getElementCount('offer_whohas_applied',$id);

        }

    }
}
