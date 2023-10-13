<?php

namespace App\Entity;

use App\Repository\LanguageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LanguageRepository::class)]
class Language
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $language_name = null;

    #[ORM\OneToMany(mappedBy: 'language', targetEntity: SpeaksLanguage::class, orphanRemoval: true)]
    private Collection $language_whospeaks;

    public function __construct()
    {
        $this->language_whospeaks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLanguageName(): ?string
    {
        return $this->language_name;
    }

    public function setLanguageName(string $language_name): static
    {
        $this->language_name = $language_name;

        return $this;
    }

    /**
     * @return Collection<int, SpeaksLanguage>
     */
    public function getLanguageWhospeaks(): Collection
    {
        return $this->language_whospeaks;
    }

    public function addLanguageWhospeak(SpeaksLanguage $languageWhospeak): static
    {
        if (!$this->language_whospeaks->contains($languageWhospeak)) {
            $this->language_whospeaks->add($languageWhospeak);
            $languageWhospeak->setLanguage($this);
        }

        return $this;
    }

    public function removeLanguageWhospeak(SpeaksLanguage $languageWhospeak): static
    {
        if ($this->language_whospeaks->removeElement($languageWhospeak)) {
            // set the owning side to null (unless already changed)
            if ($languageWhospeak->getLanguage() === $this) {
                $languageWhospeak->setLanguage(null);
            }
        }

        return $this;
    }
}
