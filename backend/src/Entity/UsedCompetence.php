<?php

namespace App\Entity;

use App\Repository\UsedCompetenceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsedCompetenceRepository::class)]
class UsedCompetence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'experience_competence')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ProfessionnalExperience $experience = null;

    #[ORM\ManyToOne(inversedBy: 'competence_which_has')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Competence $competence = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExperience(): ?ProfessionnalExperience
    {
        return $this->experience;
    }

    public function setExperience(?ProfessionnalExperience $experience): static
    {
        $this->experience = $experience;

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
