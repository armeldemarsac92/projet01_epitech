<?php

namespace App\Entity;

use App\Repository\JobOfferRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JobOfferRepository::class)]
class JobOffer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(inversedBy: 'contract_who_has', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?HasContract $contract_type = null;

    #[ORM\Column(length: 150)]
    private ?string $offer_title = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $offer_publication_date = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $offer_about = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $offer_expected_work = null;

    #[ORM\Column]
    private ?int $offer_annual_salary = null;

    #[ORM\Column(length: 255)]
    private ?string $offer_studies = null;

    #[ORM\OneToMany(mappedBy: 'job_offer', targetEntity: RequiredTool::class, orphanRemoval: true, fetch: "EAGER")]
    private Collection $offer_tool;

    #[ORM\OneToMany(mappedBy: 'job_offer', targetEntity: RequiredCompetence::class, orphanRemoval: true, fetch: "EAGER")]
    private Collection $offer_competence;

    #[ORM\ManyToOne(inversedBy: 'enterprise_job_offer', fetch: "EAGER")]
    #[ORM\JoinColumn(nullable: false)]
    private ?Enterprise $offer_enterprise = null;

    #[ORM\OneToMany(mappedBy: 'offer', targetEntity: HasApplied::class, orphanRemoval: true, fetch: "EAGER")]
    private Collection $offer_whohas_applied;

    #[ORM\OneToMany(mappedBy: 'offer', targetEntity: HasFaved::class, orphanRemoval: true, fetch: "EAGER")]
    private Collection $offer_whohas_faved;

    public function __construct()
    {
        $this->offer_tool = new ArrayCollection();
        $this->offer_competence = new ArrayCollection();
        $this->offer_whohas_applied = new ArrayCollection();
        $this->offer_whohas_faved = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContractType(): ?HasContract
    {
        return $this->contract_type;
    }

    public function setContractType(HasContract $contract_type): static
    {
        $this->contract_type = $contract_type;

        return $this;
    }

    public function getOfferTitle(): ?string
    {
        return $this->offer_title;
    }

    public function setOfferTitle(string $offer_title): static
    {
        $this->offer_title = $offer_title;

        return $this;
    }

    public function getOfferPublicationDate(): ?\DateTimeInterface
    {
        return $this->offer_publication_date;
    }

    public function setOfferPublicationDate(\DateTimeInterface $offer_publication_date): static
    {
        $this->offer_publication_date = $offer_publication_date;

        return $this;
    }

    public function getOfferAbout(): ?string
    {
        return $this->offer_about;
    }

    public function setOfferAbout(string $offer_about): static
    {
        $this->offer_about = $offer_about;

        return $this;
    }

    public function getOfferExpectedWork(): ?string
    {
        return $this->offer_expected_work;
    }

    public function setOfferExpectedWork(string $offer_expected_work): static
    {
        $this->offer_expected_work = $offer_expected_work;

        return $this;
    }

    public function getOfferAnnualSalary(): ?int
    {
        return $this->offer_annual_salary;
    }

    public function setOfferAnnualSalary(int $offer_annual_salary): static
    {
        $this->offer_annual_salary = $offer_annual_salary;

        return $this;
    }

    public function getOfferStudies(): ?string
    {
        return $this->offer_studies;
    }

    public function setOfferStudies(string $offer_studies): static
    {
        $this->offer_studies = $offer_studies;

        return $this;
    }

    /**
     * @return Collection<int, RequiredTool>
     */
    public function getOfferTool(): Collection
    {
        return $this->offer_tool;
    }

    public function addOfferTool(RequiredTool $offerTool): static
    {
        if (!$this->offer_tool->contains($offerTool)) {
            $this->offer_tool->add($offerTool);
            $offerTool->setJobOffer($this);
        }

        return $this;
    }

    public function removeOfferTool(RequiredTool $offerTool): static
    {
        if ($this->offer_tool->removeElement($offerTool)) {
            // set the owning side to null (unless already changed)
            if ($offerTool->getJobOffer() === $this) {
                $offerTool->setJobOffer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, RequiredCompetence>
     */
    public function getOfferCompetence(): Collection
    {
        return $this->offer_competence;
    }

    public function addOfferCompetence(RequiredCompetence $offerCompetence): static
    {
        if (!$this->offer_competence->contains($offerCompetence)) {
            $this->offer_competence->add($offerCompetence);
            $offerCompetence->setJobOffer($this);
        }

        return $this;
    }

    public function removeOfferCompetence(RequiredCompetence $offerCompetence): static
    {
        if ($this->offer_competence->removeElement($offerCompetence)) {
            // set the owning side to null (unless already changed)
            if ($offerCompetence->getJobOffer() === $this) {
                $offerCompetence->setJobOffer(null);
            }
        }

        return $this;
    }

    public function getOfferEnterprise(): ?Enterprise
    {
        return $this->offer_enterprise;
    }

    public function setOfferEnterprise(?Enterprise $offer_enterprise): static
    {
        $this->offer_enterprise = $offer_enterprise;

        return $this;
    }

    /**
     * @return Collection<int, HasApplied>
     */
    public function getOfferWhohasApplied(): Collection
    {
        return $this->offer_whohas_applied;
    }

    public function addOfferWhohasApplied(HasApplied $offerWhohasApplied): static
    {
        if (!$this->offer_whohas_applied->contains($offerWhohasApplied)) {
            $this->offer_whohas_applied->add($offerWhohasApplied);
            $offerWhohasApplied->setOffer($this);
        }

        return $this;
    }

    public function removeOfferWhohasApplied(HasApplied $offerWhohasApplied): static
    {
        if ($this->offer_whohas_applied->removeElement($offerWhohasApplied)) {
            // set the owning side to null (unless already changed)
            if ($offerWhohasApplied->getOffer() === $this) {
                $offerWhohasApplied->setOffer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, HasFaved>
     */
    public function getOfferWhohasFaved(): Collection
    {
        return $this->offer_whohas_faved;
    }

    public function addOfferWhohasFaved(HasFaved $offerWhohasFaved): static
    {
        if (!$this->offer_whohas_faved->contains($offerWhohasFaved)) {
            $this->offer_whohas_faved->add($offerWhohasFaved);
            $offerWhohasFaved->setOffer($this);
        }

        return $this;
    }

    public function removeOfferWhohasFaved(HasFaved $offerWhohasFaved): static
    {
        if ($this->offer_whohas_faved->removeElement($offerWhohasFaved)) {
            // set the owning side to null (unless already changed)
            if ($offerWhohasFaved->getOffer() === $this) {
                $offerWhohasFaved->setOffer(null);
            }
        }

        return $this;
    }
}
