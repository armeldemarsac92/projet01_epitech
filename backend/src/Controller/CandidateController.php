<?php

namespace App\Controller;

use App\Repository\CandidateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CandidateController extends AbstractController
{
    #[Route('/candidate', name: 'app_candidate')]
    public function index(CandidateRepository $repository): JsonResponse
    {
        $candidates = $repository
    }
}
