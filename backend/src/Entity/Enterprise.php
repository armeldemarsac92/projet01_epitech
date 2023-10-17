<?php

namespace App\Entity;

use App\Repository\EnterpriseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EnterpriseRepository::class)]
class Enterprise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 80)]
    private ?string $enterprise_name = null;

    #[ORM\Column(length: 255)]
    private ?string $enterprise_field = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $enterprise_about = null;

    #[ORM\Column(nullable: true)]
    private ?int $enterprise_workers_count = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $enterprise_creation_date = null;

    #[ORM\Column(length: 255)]
    private ?string $enterprise_localisation = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $enterprise_desired_profiles = null;

    #[ORM\Column(nullable: true)]
    private ?int $enterprise_average_age = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $enterprise_profile_picture = null;

    #[ORM\OneToMany(mappedBy: 'enterprise', targetEntity: ProfessionnalExperience::class, orphanRemoval: true)]
    private Collection $enterprise_related_experience;

    #[ORM\OneToMany(mappedBy: 'offer_enterprise', targetEntity: JobOffer::class, orphanRemoval: true)]
    private Collection $enterprise_job_offer;

    public function __construct()
    {
        $this->enterprise_related_experience = new ArrayCollection();
        $this->enterprise_job_offer = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnterpriseName(): ?string
    {
        return $this->enterprise_name;
    }

    public function setEnterpriseName(string $enterprise_name): static
    {
        $this->enterprise_name = $enterprise_name;

        return $this;
    }

    public function getEnterpriseField(): ?string
    {
        return $this->enterprise_field;
    }

    public function setEnterpriseField(string $enterprise_field): static
    {
        $this->enterprise_field = $enterprise_field;

        return $this;
    }

    public function getEnterpriseAbout(): ?string
    {
        return $this->enterprise_about;
    }

    public function setEnterpriseAbout(?string $enterprise_about): static
    {
        $this->enterprise_about = $enterprise_about;

        return $this;
    }

    public function getEnterpriseWorkersCount(): ?int
    {
        return $this->enterprise_workers_count;
    }

    public function setEnterpriseWorkersCount(?int $enterprise_workers_count): static
    {
        $this->enterprise_workers_count = $enterprise_workers_count;

        return $this;
    }

    public function getEnterpriseCreationDate(): ?\DateTimeInterface
    {
        return $this->enterprise_creation_date;
    }

    public function setEnterpriseCreationDate(?\DateTimeInterface $enterprise_creation_date): static
    {
        $this->enterprise_creation_date = $enterprise_creation_date;

        return $this;
    }

    public function getEnterpriseLocalisation(): ?string
    {
        return $this->enterprise_localisation;
    }

    public function setEnterpriseLocalisation(string $enterprise_localisation): static
    {
        $this->enterprise_localisation = $enterprise_localisation;

        return $this;
    }

    public function getEnterpriseDesiredProfiles(): ?string
    {
        return $this->enterprise_desired_profiles;
    }

    public function setEnterpriseDesiredProfiles(?string $enterprise_desired_profiles): static
    {
        $this->enterprise_desired_profiles = $enterprise_desired_profiles;

        return $this;
    }

    public function getEnterpriseAverageAge(): ?int
    {
        return $this->enterprise_average_age;
    }

    public function setEnterpriseAverageAge(?int $enterprise_average_age): static
    {
        $this->enterprise_average_age = $enterprise_average_age;

        return $this;
    }

    public function getEnterpriseProfilePicture(): ?string
    {
        return $this->enterprise_profile_picture;
    }

    public function setEnterpriseProfilePicture(?string $enterprise_profile_picture): static
    {
        $this->enterprise_profile_picture = $enterprise_profile_picture;

        return $this;
    }

    /**
     * @return Collection<int, ProfessionnalExperience>
     */
    public function getEnterpriseRelatedExperience(): Collection
    {
        return $this->enterprise_related_experience;
    }

    public function addEnterpriseRelatedExperience(ProfessionnalExperience $enterpriseRelatedExperience): static
    {
        if (!$this->enterprise_related_experience->contains($enterpriseRelatedExperience)) {
            $this->enterprise_related_experience->add($enterpriseRelatedExperience);
            $enterpriseRelatedExperience->setEnterprise($this);
        }

        return $this;
    }

    public function removeEnterpriseRelatedExperience(ProfessionnalExperience $enterpriseRelatedExperience): static
    {
        if ($this->enterprise_related_experience->removeElement($enterpriseRelatedExperience)) {
            // set the owning side to null (unless already changed)
            if ($enterpriseRelatedExperience->getEnterprise() === $this) {
                $enterpriseRelatedExperience->setEnterprise(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, JobOffer>
     */
    public function getEnterpriseJobOffer(): Collection
    {
        return $this->enterprise_job_offer;
    }

    public function addEnterpriseJobOffer(JobOffer $enterpriseJobOffer): static
    {
        if (!$this->enterprise_job_offer->contains($enterpriseJobOffer)) {
            $this->enterprise_job_offer->add($enterpriseJobOffer);
            $enterpriseJobOffer->setOfferEnterprise($this);
        }

        return $this;
    }

    public function removeEnterpriseJobOffer(JobOffer $enterpriseJobOffer): static
    {
        if ($this->enterprise_job_offer->removeElement($enterpriseJobOffer)) {
            // set the owning side to null (unless already changed)
            if ($enterpriseJobOffer->getOfferEnterprise() === $this) {
                $enterpriseJobOffer->setOfferEnterprise(null);
            }
        }

        return $this;
    }
}
