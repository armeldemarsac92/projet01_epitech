<?php

namespace App\Entity;

use App\Repository\DegreeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DegreeRepository::class)]
class Degree
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'candidate_degree')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Candidate $candidate = null;

    #[ORM\Column(length: 100)]
    private ?string $degree_name = null;

    #[ORM\Column(length: 100)]
    private ?string $degree_school = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $degree_start_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $degree_end_date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCandidate(): ?Candidate
    {
        return $this->candidate;
    }

    public function setCandidate(?Candidate $candidate): static
    {
        $this->candidate = $candidate;

        return $this;
    }

    public function getDegreeName(): ?string
    {
        return $this->degree_name;
    }

    public function setDegreeName(string $degree_name): static
    {
        $this->degree_name = $degree_name;

        return $this;
    }

    public function getDegreeSchool(): ?string
    {
        return $this->degree_school;
    }

    public function setDegreeSchool(string $degree_school): static
    {
        $this->degree_school = $degree_school;

        return $this;
    }

    public function getDegreeStartDate(): ?\DateTimeInterface
    {
        return $this->degree_start_date;
    }

    public function setDegreeStartDate(\DateTimeInterface $degree_start_date): static
    {
        $this->degree_start_date = $degree_start_date;

        return $this;
    }

    public function getDegreeEndDate(): ?\DateTimeInterface
    {
        return $this->degree_end_date;
    }

    public function setDegreeEndDate(\DateTimeInterface $degree_end_date): static
    {
        $this->degree_end_date = $degree_end_date;

        return $this;
    }
}
