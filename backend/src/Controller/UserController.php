<?php

namespace App\Controller;

use App\Entity\Candidate;
use App\Repository\CandidateRepository;
use App\Repository\EnterpriseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserController extends AbstractController
{

    public function __construct(private EntityManagerInterface $entityManager) {

    } 

    #[Route('/user', name: 'app_user')]
    public function registration(CandidateRepository $candidateRepository, EnterpriseRepository $enterpriseRepository, UserPasswordHasherInterface $passwordHasher): Response
    {

    }

    #[Route('/user/get', name: 'app_user')]
    public function getAllUser() {

        $allUser = $this->entityManager->getRepository(Candidate::class)->findOneById(2);

        dd($allUser);

    }

}
