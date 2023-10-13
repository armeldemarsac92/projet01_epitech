<?php

namespace App\Entity;

use App\Repository\RequiredCompetenceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RequiredCompetenceRepository::class)]
class RequiredCompetence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'offer_competence')]
    #[ORM\JoinColumn(nullable: false)]
    private ?JobOffer $job_offer = null;

    #[ORM\ManyToOne(inversedBy: 'competence_who_needs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Competence $competence = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJobOffer(): ?JobOffer
    {
        return $this->job_offer;
    }

    public function setJobOffer(?JobOffer $job_offer): static
    {
        $this->job_offer = $job_offer;

        return $this;
    }

    public function getCompetence(): ?Competence
    {
        return $this->competence;
    }

    public function setCompetence(?Competence $competence): static
    {
        $this->competence = $competence;

        return $this;
    }
}
