<?php

namespace App\Entity;

use App\Repository\SpeaksLanguageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SpeaksLanguageRepository::class)]
class SpeaksLanguage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'candidate_language')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Candidate $candidate = null;

    #[ORM\ManyToOne(inversedBy: 'language_whospeaks')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Language $language = null;

    #[ORM\ManyToOne(inversedBy: 'language_level_whohas')]
    #[ORM\JoinColumn(nullable: false)]
    private ?LanguageLevel $language_level = null;

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

    public function getLanguage(): ?Language
    {
        return $this->language;
    }

    public function setLanguage(?Language $language): static
    {
        $this->language = $language;

        return $this;
    }

    public function getLanguageLevel(): ?LanguageLevel
    {
        return $this->language_level;
    }

    public function setLanguageLevel(?LanguageLevel $language_level): static
    {
        $this->language_level = $language_level;

        return $this;
    }
}
