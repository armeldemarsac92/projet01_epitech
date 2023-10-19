<?php

namespace App\Controller;

use App\Entity\Candidate;
use App\Entity\CandidateHasRole;
use App\Entity\EnterpriseHasRole;
use App\Entity\Enterprise;
use App\Entity\Role;
use App\Repository\CandidateRepository;
use App\Repository\EnterpriseHasRoleRepository;
use App\Repository\EnterpriseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\HttpFoundation\Request;

class UserController extends AbstractController
{
    #[Route('api/profile/create_candidate', name: 'create_candidate', methods: ['POST'])]
    public function candidateRegistration(
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager,
        Request $request
    ): JsonResponse {

        $data = json_decode($request->getContent(), true);

        $first_name = $data['first_name'] ?? null;
        $last_name = $data['last_name'] ?? null;
        $phone_number = $data['phone_number'] ?? null;
        $email = $data['email'] ?? null;
        $password = $data['password'] ?? null;

        $existingUser = $entityManager->getRepository(Candidate::class)->findOneBy(['candidate_email' => $email]);

        dump($first_name,$last_name,$phone_number,$password);

        if (!$existingUser) {
            $candidate = new Candidate();
            $candidate->setCandidateFirstName($first_name);
            $candidate->setCandidateLastName($last_name);
            $candidate->setCandidatePhoneNumber($phone_number);
            $candidate->setCandidateEmail($email);
            $role = $entityManager->getRepository(Role::class)->findOneBy(['role' => 'candidate']);
            if ($role) {
                $candidateHasRole = new CandidateHasRole();
                $candidateHasRole->setCandidateId($candidate);
                $candidateHasRole->setRoleId($role);
                $candidate->addCandidateRole($candidateHasRole);
            } else {
                
                throw new \Exception('Role "candidate" not found in the database.');
            } 
            $hashedPassword = $passwordHasher->hashPassword($candidate, $password);
            $candidate->setPassword($hashedPassword);
            $entityManager->persist($candidateHasRole);
            $entityManager->persist($candidate);
            $entityManager->flush();

            $response = new JsonResponse(['result' => 'success']);
        } else {
            $response = new JsonResponse(['result' => 'user already exists']);
        }

        // Setting CORS headers
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, PATCH, OPTIONS');

        return $response;
    }

    #[Route('api/profile/create_enterprise', name: 'create_enterprise', methods: ['POST'])]
    
    public function enterpriseRegistration(
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager,
        Request $request
    ): JsonResponse {
    
        $data = json_decode($request->getContent(), true);
    
        $enterprise_name = $data['enterprise_name'] ?? null;
        $enterprise_field = $data['enterprise_field'] ?? null;
        $creation_date = new \DateTime($data['creation_date'] ?? null); // Assuming this comes as a string
        $email = $data['email'] ?? null;
        $password = $data['password'] ?? null;
    
        $existingEnterprise = $entityManager->getRepository(Enterprise::class)->findOneBy(['enterprise_email' => $email]);
    
        if (!$existingEnterprise) {
            $enterprise = new Enterprise();
            $enterprise->setEnterpriseName($enterprise_name);
            $enterprise->setEnterpriseField($enterprise_field);
            $enterprise->setEnterpriseCreationDate($creation_date);
            $enterprise->setEnterpriseEmail($email);
            $role = $entityManager->getRepository(Role::class)->findOneBy(['role' => 'enterprise']);
            if ($role) {
                $enterpriseHasRole = new EnterpriseHasRole(); // Assuming you have a similar table for Enterprises
                $enterpriseHasRole->setEnterpriseId($enterprise);
                $enterpriseHasRole->setRoleId($role);
                $enterprise->addEnterpriseRole($enterpriseHasRole);
            } else {
                throw new \Exception('Role "enterprise" not found in the database.');
            } 
            $hashedPassword = $passwordHasher->hashPassword($enterprise, $password);
            $enterprise->setPassword($hashedPassword);
            $entityManager->persist($enterpriseHasRole);
            $entityManager->persist($enterprise);
            $entityManager->flush();
    
            return new JsonResponse(['result' => 'success']);
        } else {
            return new JsonResponse(['result' => 'enterprise already exists']);
        }
    }
    
}