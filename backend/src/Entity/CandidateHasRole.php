<?php

namespace App\Entity;

use App\Repository\CandidateHasRoleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CandidateHasRoleRepository::class)]
class CandidateHasRole
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'candidate_role')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Candidate $candidate_id = null;

    #[ORM\ManyToOne(inversedBy: 'role_candidate_whohas')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Role $role_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCandidateId(): ?Candidate
    {
        return $this->candidate_id;
    }

    public function setCandidateId(?Candidate $candidate_id): static
    {
        $this->candidate_id = $candidate_id;

        return $this;
    }

    public function getRoleId(): ?Role
    {
        return $this->role_id;
    }

    public function setRoleId(?Role $role_id): static
    {
        $this->role_id = $role_id;

        return $this;
    }
}
