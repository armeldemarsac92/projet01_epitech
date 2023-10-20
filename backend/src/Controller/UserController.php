<?php

namespace App\Controller;

use App\Entity\Candidate;
use App\Entity\CandidateHasRole;
use App\Entity\EnterpriseHasRole;
use App\Entity\Enterprise;
use App\Entity\Role;
use App\Repository\CandidateRepository;
use App\Repository\JobOfferRepository;
use App\Entity\JobOffer;
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
use Symfony\Component\HttpFoundation\Response;

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

    #[Route('api/profile/get_candidate_data', name: 'get_candidate_data', methods: ['POST'])]
    public function candidateLogin(
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager,
        Request $request
    ): JsonResponse {

        $data = json_decode($request->getContent(), true);

        $email = $data['email'] ?? null;
        $password = $data['password'] ?? null;

        $candidate = $entityManager->getRepository(Candidate::class)->findOneBy(['candidate_email' => $email]);

        if (($candidate && $passwordHasher->isPasswordValid($candidate, $password)) || (!$candidate->getPassword() && !$password)) {

            $userData = [];

            $usedTools = [];
            $usedCompetences = [];
            $certifications = [];
            $degrees = [];
            $hobbies = [];
            $languages = [];
            $candidateExperiences = [];
            $favorites = [];
            $applications = [];

            foreach($candidate->getCandidateExperience() as $professionnalExperience) {

                foreach($professionnalExperience->getExperienceTool() as $experienceUsedTool) {
                    $usedTools[] = $experienceUsedTool->getTool()->getToolName();
                }

                foreach($professionnalExperience->getExperienceCompetence() as $experienceUsedCompetence) {
                    $usedCompetences[] = $experienceUsedCompetence->getCompetence()->getCompetenceName();
                }

                $candidateExperiences[] = [
                    'enterprise_name' => $professionnalExperience->getEnterprise()->getEnterpriseName(),
                    'experience_localisation' => $professionnalExperience->getEnterprise()->getEnterpriseLocalisation(),
                    'experience start_date' => $professionnalExperience->getExperienceStartDate(),
                    'experience end_date' => $professionnalExperience->getExperienceEndDate(),
                    'experience_position' => $professionnalExperience->getExperienceJobTitle(),
                    'experience_description' => $professionnalExperience->getExperienceDescription(),
                    'experience_used_tools' => $usedTools,
                    'experience_used_competences' => $usedCompetences,
                ];

            }

            foreach($candidate->getCandidateCertification() as $candidateCertification) {
                $certifications[] = $candidateCertification->getCertification()->getCertificationName();
            }

            foreach($candidate->getCandidateDegree() as $candidateDegree) {
                $degrees[] = [
                    'degree_name' => $candidateDegree->getDegreeName(),
                    'degree_school' => $candidateDegree->getDegreeSchool(),
                    'degree_start_date' =>$candidateDegree->getDegreeStartDate(),
                    'degree_end_date' =>$candidateDegree->getDegreeEndDate(),
                ];
            }

            foreach($candidate->getCandidateHobby() as $candidateHobby) {
                $hobbies[] = $candidateHobby->getHobby()->getHobbyName();
            }

            foreach($candidate->getCandidateLanguage() as $candidateLanguage) {
                $languages[] = [
                    'language_name' => $candidateLanguage->getLanguage()->getLanguageName(),
                    'language_level' => $candidateLanguage->getLanguageLevel()->getLanguageLevel(),
                ];
            }

            foreach($candidate->getCandidateFavorite() as $candidateFavorite) {
                $favorites[] = $candidateFavorite->getOffer()->getId();
            }

            foreach($candidate->getCandidateApplications() as $candidateApplication) {
                $applications[] = $candidateApplication->getOffer()->getId();
            }

            foreach($candidate->getCandidateRole() as $role) {
                $roles[] = $role->getRoleId()->getRole();
            }

            $userData = [
                'id'=> $candidate->getId(),
                'first_name' => $candidate->getCandidateFirstName(),
                'last_name'=> $candidate->getCandidateLastName(),
                'sex' => $candidate->getCandidateSex(),
                'email' => $candidate->getCandidateEmail(),
                'phone_number' => $candidate->getCandidatePhoneNumber(),
                'localisation' => $candidate->getCandidateLocalisation(),
                'about' => $candidate->getCandidateAbout(),
                'profile_picture' => $candidate->getCandidateProfilePicture(),
                'status' => $candidate->getCandidateStatus(),
                'language' => $languages,
                'hobby' => $hobbies,
                'degree' => $degrees,
                'certification' => $certifications,
                'experience' => $candidateExperiences,
                'favorite' => $favorites,
                'application' => $applications,
                'roles' => $roles
            ];

            $response = new JsonResponse(['result' => 'login success',$userData]);
        } else {
            $response = new JsonResponse(['error' => 'Invalid credentials.'], Response::HTTP_UNAUTHORIZED);
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

    #[Route('api/profile/get_enterprise_data', name: 'get_enterprise_data', methods: ['POST'])]
    public function enterpriseLogin(
        JobOfferRepository $jobOfferRepository,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager,
        Request $request
    ): JsonResponse {

        $data = json_decode($request->getContent(), true);

        $email = $data['email'] ?? null;
        $password = $data['password'] ?? null;

        $enterprise = $entityManager->getRepository(Enterprise::class)->findOneBy(['enterprise_email' => $email]);

        if (($enterprise && $passwordHasher->isPasswordValid($enterprise, $password)) || (!$enterprise->getPassword() && !$password)) {

            $userData = [];
            $workers = [];
            $roles = [];
            
            $jobOfferData = [];

            $jobOffers = $entityManager->getRepository(JobOffer::class)->findBy(['offer_enterprise'=> $enterprise->getId()]);

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

            foreach($enterprise->getEnterpriseRelatedExperience() as $relatedExperience) {
                $workers[] = $relatedExperience->getCandidate()->getCandidateFirstName();
            }

            foreach($enterprise->getEnterpriseRole() as $role) {
                $roles[] = $role->getRoleId()->getRole();
            }

            $userData = [
                'id'=> $enterprise->getId(),
                'enterprise_name' => $enterprise->getEnterpriseName(),
                'enterprise_field' => $enterprise->getEnterpriseField(),
                'enterprise_about' => $enterprise->getEnterpriseAbout(),
                'enterprise_workers_count' => $enterprise->getEnterpriseWorkersCount(),
                'enterprise_creation_date' => $enterprise->getEnterpriseCreationDate(),
                'enterprise_localisation' => $enterprise->getEnterpriseLocalisation(),
                'enterprise_desired_profiles' => $enterprise->getEnterpriseDesiredProfiles(),
                'enterprise_average_age' => $enterprise->getEnterpriseAverageAge(),
                'enterprise_profile_picture' => $enterprise->getEnterpriseProfilePicture(),
                'enterprise_workers' => $workers,
                'enterprise_job_offers' => $jobOfferData,
                'email' => $enterprise->getEnterpriseEmail(),
                'roles' => $roles 
            ];

            $response = new JsonResponse(['result' => 'login success',$userData]);
        } else {
            $response = new JsonResponse(['error' => 'Invalid credentials.'], Response::HTTP_UNAUTHORIZED);
        }

        // Setting CORS headers
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, PATCH, OPTIONS');

        return $response;
}
    
}