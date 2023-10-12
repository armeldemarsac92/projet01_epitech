<?php

namespace App\Entity;

use App\Repository\CompetenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompetenceRepository::class)]
class Competence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $competence_name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $competence_icon = null;

    #[ORM\OneToMany(mappedBy: 'competence', targetEntity: UsedCompetence::class, orphanRemoval: true)]
    private Collection $competence_which_has;

    #[ORM\OneToMany(mappedBy: 'competence', targetEntity: RequiredCompetence::class, orphanRemoval: true)]
    private Collection $competence_who_needs;

    public function __construct()
    {
        $this->competence_which_has = new ArrayCollection();
        $this->competence_who_needs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getcompetenceName(): ?string
    {
        return $this->competence_name;
    }

    public function setcompetenceName(string $competence_name): static
    {
        $this->competence_name = $competence_name;

        return $this;
    }

    public function getCompetenceIcon(): ?string
    {
        return $this->competence_icon;
    }

    public function setCompetenceIcon(?string $competence_icon): static
    {
        $this->competence_icon = $competence_icon;

        return $this;
    }

    /**
     * @return Collection<int, UsedCompetence>
     */
    public function getCompetenceWhichHas(): Collection
    {
        return $this->competence_which_has;
    }

    public function addCompetenceWhichHa(UsedCompetence $competenceWhichHa): static
    {
        if (!$this->competence_which_has->contains($competenceWhichHa)) {
            $this->competence_which_has->add($competenceWhichHa);
            $competenceWhichHa->setCompetence($this);
        }

        return $this;
    }

    public function removeCompetenceWhichHa(UsedCompetence $competenceWhichHa): static
    {
        if ($this->competence_which_has->removeElement($competenceWhichHa)) {
            // set the owning side to null (unless already changed)
            if ($competenceWhichHa->getCompetence() === $this) {
                $competenceWhichHa->setCompetence(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, RequiredCompetence>
     */
    public function getCompetenceWhoNeeds(): Collection
    {
        return $this->competence_who_needs;
    }

    public function addCompetenceWhoNeed(RequiredCompetence $competenceWhoNeed): static
    {
        if (!$this->competence_who_needs->contains($competenceWhoNeed)) {
            $this->competence_who_needs->add($competenceWhoNeed);
            $competenceWhoNeed->setCompetence($this);
        }

        return $this;
    }

    public function removeCompetenceWhoNeed(RequiredCompetence $competenceWhoNeed): static
    {
        if ($this->competence_who_needs->removeElement($competenceWhoNeed)) {
            // set the owning side to null (unless already changed)
            if ($competenceWhoNeed->getCompetence() === $this) {
                $competenceWhoNeed->setCompetence(null);
            }
        }

        return $this;
    }
}
