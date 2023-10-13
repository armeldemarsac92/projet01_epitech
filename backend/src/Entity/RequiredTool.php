<?php

namespace App\Entity;

use App\Repository\RequiredToolRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RequiredToolRepository::class)]
class RequiredTool
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'offer_tool')]
    #[ORM\JoinColumn(nullable: false)]
    private ?JobOffer $job_offer = null;

    #[ORM\ManyToOne(inversedBy: 'tool_who_needs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Tool $tool = null;

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
