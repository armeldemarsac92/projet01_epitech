<?php

namespace App\Controller;

use App\Repository\JobOfferRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobOfferController extends AbstractController
{
    /**
     * @Route("/job-offers", name="job_offers")
     */
    public function fetchJobOffers(JobOfferRepository $jobOfferRepository): Response
    {
        // Fetch job offers from the database
        $jobOffers = $jobOfferRepository->findAll();

        // Return as JSON (for an API endpoint)
        // return $this->json($jobOffers);

        // Or return rendered in a template (for a web page)
        return $this->render('job_offers/index.html.twig', [
            'job_offers' => $jobOffers,
        ]);
    }
}
