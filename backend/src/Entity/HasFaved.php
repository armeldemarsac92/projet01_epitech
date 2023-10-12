<?php

namespace App\Entity;

use App\Repository\HasFavedRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HasFavedRepository::class)]
class HasFaved
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'candidate_favorite')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Candidate $candidate = null;

    #[ORM\ManyToOne(inversedBy: 'offer_whohas_faved')]
    #[ORM\JoinColumn(nullable: false)]
    private ?JobOffer $offer = null;

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

    public function getOffer(): ?JobOffer
    {
        return $this->offer;
    }

    public function setOffer(?JobOffer $offer): static
    {
        $this->offer = $offer;

        return $this;
    }
}
