<?php

namespace App\Entity;

use App\Repository\ProfessionnalExperienceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfessionnalExperienceRepository::class)]
class ProfessionnalExperience
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'enterprise_related_experience')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Enterprise $enterprise = null;

    #[ORM\ManyToOne(inversedBy: 'candidate_experience')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Candidate $candidate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $experience_start_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $experience_end_date = null;

    #[ORM\Column(length: 100)]
    private ?string $experience_job_title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $experience_description = null;

    #[ORM\OneToMany(mappedBy: 'experience', targetEntity: UsedTool::class, orphanRemoval: true)]
    private Collection $experience_tool;

    #[ORM\OneToMany(mappedBy: 'experience', targetEntity: UsedCompetence::class, orphanRemoval: true)]
    private Collection $experience_competence;

    public function __construct()
    {
        $this->experience_tool = new ArrayCollection();
        $this->experience_competence = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnterprise(): ?Enterprise
    {
        return $this->enterprise;
    }

    public function setEnterprise(?Enterprise $enterprise): static
    {
        $this->enterprise = $enterprise;

        return $this;
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

    public function getExperienceStartDate(): ?\DateTimeInterface
    {
        return $this->experience_start_date;
    }

    public function setExperienceStartDate(\DateTimeInterface $experience_start_date): static
    {
        $this->experience_start_date = $experience_start_date;

        return $this;
    }

    public function getExperienceEndDate(): ?\DateTimeInterface
    {
        return $this->experience_end_date;
    }

    public function setExperienceEndDate(?\DateTimeInterface $experience_end_date): static
    {
        $this->experience_end_date = $experience_end_date;

        return $this;
    }

    public function getExperienceJobTitle(): ?string
    {
        return $this->experience_job_title;
    }

    public function setExperienceJobTitle(string $experience_job_title): static
    {
        $this->experience_job_title = $experience_job_title;

        return $this;
    }

    public function getExperienceDescription(): ?string
    {
        return $this->experience_description;
    }

    public function setExperienceDescription(string $experience_description): static
    {
        $this->experience_description = $experience_description;

        return $this;
    }

    /**
     * @return Collection<int, UsedTool>
     */
    public function getExperienceTool(): Collection
    {
        return $this->experience_tool;
    }

    public function addExperienceTool(UsedTool $experienceTool): static
    {
        if (!$this->experience_tool->contains($experienceTool)) {
            $this->experience_tool->add($experienceTool);
            $experienceTool->setExperience($this);
        }

        return $this;
    }

    public function removeExperienceTool(UsedTool $experienceTool): static
    {
        if ($this->experience_tool->removeElement($experienceTool)) {
            // set the owning side to null (unless already changed)
            if ($experienceTool->getExperience() === $this) {
                $experienceTool->setExperience(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, UsedCompetence>
     */
    public function getExperienceCompetence(): Collection
    {
        return $this->experience_competence;
    }

    public function addExperienceCompetence(UsedCompetence $experienceCompetence): static
    {
        if (!$this->experience_competence->contains($experienceCompetence)) {
            $this->experience_competence->add($experienceCompetence);
            $experienceCompetence->setExperience($this);
        }

        return $this;
    }

    public function removeExperienceCompetence(UsedCompetence $experienceCompetence): static
    {
        if ($this->experience_competence->removeElement($experienceCompetence)) {
            // set the owning side to null (unless already changed)
            if ($experienceCompetence->getExperience() === $this) {
                $experienceCompetence->setExperience(null);
            }
        }

        return $this;
    }
}
