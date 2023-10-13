<?php

namespace App\Entity;

use App\Repository\UsedToolRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsedToolRepository::class)]
class UsedTool
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'experience_tool')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ProfesionnalExperience $experience = null;

    #[ORM\ManyToOne(inversedBy: 'tool_which_has')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Tool $tool = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExperience(): ?ProfesionnalExperience
    {
        return $this->experience;
    }

    public function setExperience(?ProfesionnalExperience $experience): static
    {
        $this->experience = $experience;

        return $this;
    }

    public function getTool(): ?Tool
    {
        return $this->tool;
    }

    public function setTool(?Tool $tool): static
    {
        $this->tool = $tool;

        return $this;
    }
}
