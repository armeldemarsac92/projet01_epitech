<?php

namespace App\Entity;

use App\Repository\LanguageLevelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LanguageLevelRepository::class)]
class LanguageLevel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 80)]
    private ?string $language_level = null;

    #[ORM\OneToMany(mappedBy: 'language_level', targetEntity: SpeaksLanguage::class, orphanRemoval: true)]
    private Collection $language_level_whohas;

    public function __construct()
    {
        $this->language_level_whohas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLanguageLevel(): ?string
    {
        return $this->language_level;
    }

    public function setLanguageLevel(string $language_level): static
    {
        $this->language_level = $language_level;

        return $this;
    }

    /**
     * @return Collection<int, SpeaksLanguage>
     */
    public function getLanguageLevelWhohas(): Collection
    {
        return $this->language_level_whohas;
    }

    public function addLanguageLevelWhoha(SpeaksLanguage $languageLevelWhoha): static
    {
        if (!$this->language_level_whohas->contains($languageLevelWhoha)) {
            $this->language_level_whohas->add($languageLevelWhoha);
            $languageLevelWhoha->setLanguageLevel($this);
        }

        return $this;
    }

    public function removeLanguageLevelWhoha(SpeaksLanguage $languageLevelWhoha): static
    {
        if ($this->language_level_whohas->removeElement($languageLevelWhoha)) {
            // set the owning side to null (unless already changed)
            if ($languageLevelWhoha->getLanguageLevel() === $this) {
                $languageLevelWhoha->setLanguageLevel(null);
            }
        }

        return $this;
    }
}
