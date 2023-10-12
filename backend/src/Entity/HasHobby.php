<?php

namespace App\Entity;

use App\Repository\HasHobbyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HasHobbyRepository::class)]
class HasHobby
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'candidate_hobby')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Candidate $candidate = null;

    #[ORM\ManyToOne(inversedBy: 'hobby_whohas')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Hobby $hobby = null;

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

    public function getHobby(): ?Hobby
    {
        return $this->hobby;
    }

    public function setHobby(?Hobby $hobby): static
    {
        $this->hobby = $hobby;

        return $this;
    }
}
