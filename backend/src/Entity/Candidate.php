<?php

namespace App\Entity;

use App\Repository\CandidateRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: CandidateRepository::class)]
class Candidate implements  UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $candidate_first_name = null;

    #[ORM\Column(length: 40)]
    private ?string $candidate_last_name = null;

    #[ORM\Column(length: 10, nullable: True)]
    private ?string $candidate_sex = null;

    #[ORM\Column(length: 80)]
    private ?string $candidate_email = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $candidate_phone_number = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $candidate_localisation = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $candidate_about = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $candidate_profile_picture = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $candidate_status = null;

    #[ORM\OneToMany(mappedBy: 'candidate', targetEntity: SpeaksLanguage::class, orphanRemoval: true)]
    private Collection $candidate_language;

    #[ORM\OneToMany(mappedBy: 'candidate', targetEntity: Degree::class, orphanRemoval: true)]
    private Collection $candidate_degree;

    #[ORM\OneToMany(mappedBy: 'candidate', targetEntity: HasCertification::class, orphanRemoval: true)]
    private Collection $candidate_certification;

    #[ORM\OneToMany(mappedBy: 'candidate', targetEntity: HasHobby::class, orphanRemoval: true)]
    private Collection $candidate_hobby;

    #[ORM\OneToMany(mappedBy: 'candidate', targetEntity: ProfessionnalExperience::class, orphanRemoval: true)]
    private Collection $candidate_experience;

    #[ORM\OneToMany(mappedBy: 'candidate', targetEntity: HasApplied::class, orphanRemoval: true)]
    private Collection $candidate_applications;

    #[ORM\OneToMany(mappedBy: 'candidate', targetEntity: HasFaved::class, orphanRemoval: true)]
    private Collection $candidate_favorite;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $password = null;

    #[ORM\OneToMany(mappedBy: 'candidate_id', targetEntity: CandidateHasRole::class, orphanRemoval: true)]
    private Collection $candidate_role;

    public function getRoles(): array
    {
        return $this->candidate_role->map(function (CandidateHasRole $candidateHasRole) {
            return $candidateHasRole->getRoleId()->getRole();
        })->toArray();
    }
    

    public function getSalt(): ?string
    {
        // bcrypt and argon2i/s don't require a separate salt, so return null
        return null;
    }

    public function eraseCredentials(): void
    {
        // This is useful if you store any temporary authentication-related data on the entity.
        // Most use cases can leave this method empty.
    }

    public function getUserIdentifier(): string
    {
        return $this->candidate_email;
    }


    public function __construct()
    {
        $this->candidate_language = new ArrayCollection();
        $this->candidate_degree = new ArrayCollection();
        $this->candidate_certification = new ArrayCollection();
        $this->candidate_hobby = new ArrayCollection();
        $this->candidate_experience = new ArrayCollection();
        $this->candidate_applications = new ArrayCollection();
        $this->candidate_favorite = new ArrayCollection();
        $this->candidate_role = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCandidateFirstName(): ?string
    {
        return $this->candidate_first_name;
    }

    public function setCandidateFirstName(string $candidate_first_name): static
    {
        $this->candidate_first_name = $candidate_first_name;

        return $this;
    }

    public function getCandidateLastName(): ?string
    {
        return $this->candidate_last_name;
    }

    public function setCandidateLastName(string $candidate_last_name): static
    {
        $this->candidate_last_name = $candidate_last_name;

        return $this;
    }

    public function getCandidateSex(): ?string
    {
        return $this->candidate_sex;
    }

    public function setCandidateSex(string $candidate_sex): static
    {
        $this->candidate_sex = $candidate_sex;

        return $this;
    }

    public function getCandidateEmail(): ?string
    {
        return $this->candidate_email;
    }

    public function setCandidateEmail(string $candidate_email): static
    {
        $this->candidate_email = $candidate_email;

        return $this;
    }

    public function getCandidatePhoneNumber(): ?string
    {
        return $this->candidate_phone_number;
    }

    public function setCandidatePhoneNumber(?string $candidate_phone_number): static
    {
        $this->candidate_phone_number = $candidate_phone_number;

        return $this;
    }

    public function getCandidateLocalisation(): ?string
    {
        return $this->candidate_localisation;
    }

    public function setCandidateLocalisation(?string $candidate_localisation): static
    {
        $this->candidate_localisation = $candidate_localisation;

        return $this;
    }

    public function getCandidateAbout(): ?string
    {
        return $this->candidate_about;
    }

    public function setCandidateAbout(?string $candidate_about): static
    {
        $this->candidate_about = $candidate_about;

        return $this;
    }

    public function getCandidateProfilePicture(): ?string
    {
        return $this->candidate_profile_picture;
    }

    public function setCandidateProfilePicture(?string $candidate_profile_picture): static
    {
        $this->candidate_profile_picture = $candidate_profile_picture;

        return $this;
    }

    public function getCandidateStatus(): ?string
    {
        return $this->candidate_status;
    }

    public function setCandidateStatus(string $candidate_status): static
    {
        $this->candidate_status = $candidate_status;

        return $this;
    }

    /**
     * @return Collection<int, SpeaksLanguage>
     */
    public function getCandidateLanguage(): Collection
    {
        return $this->candidate_language;
    }

    public function addCandidateLanguage(SpeaksLanguage $candidateLanguage): static
    {
        if (!$this->candidate_language->contains($candidateLanguage)) {
            $this->candidate_language->add($candidateLanguage);
            $candidateLanguage->setCandidate($this);
        }

        return $this;
    }

    public function removeCandidateLanguage(SpeaksLanguage $candidateLanguage): static
    {
        if ($this->candidate_language->removeElement($candidateLanguage)) {
            // set the owning side to null (unless already changed)
            if ($candidateLanguage->getCandidate() === $this) {
                $candidateLanguage->setCandidate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Degree>
     */
    public function getCandidateDegree(): Collection
    {
        return $this->candidate_degree;
    }

    public function addCandidateDegree(Degree $candidateDegree): static
    {
        if (!$this->candidate_degree->contains($candidateDegree)) {
            $this->candidate_degree->add($candidateDegree);
            $candidateDegree->setCandidate($this);
        }

        return $this;
    }

    public function removeCandidateDegree(Degree $candidateDegree): static
    {
        if ($this->candidate_degree->removeElement($candidateDegree)) {
            // set the owning side to null (unless already changed)
            if ($candidateDegree->getCandidate() === $this) {
                $candidateDegree->setCandidate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, HasCertification>
     */
    public function getCandidateCertification(): Collection
    {
        return $this->candidate_certification;
    }

    public function addCandidateCertification(HasCertification $candidateCertification): static
    {
        if (!$this->candidate_certification->contains($candidateCertification)) {
            $this->candidate_certification->add($candidateCertification);
            $candidateCertification->setCandidate($this);
        }

        return $this;
    }

    public function removeCandidateCertification(HasCertification $candidateCertification): static
    {
        if ($this->candidate_certification->removeElement($candidateCertification)) {
            // set the owning side to null (unless already changed)
            if ($candidateCertification->getCandidate() === $this) {
                $candidateCertification->setCandidate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, HasHobby>
     */
    public function getCandidateHobby(): Collection
    {
        return $this->candidate_hobby;
    }

    public function addCandidateHobby(HasHobby $candidateHobby): static
    {
        if (!$this->candidate_hobby->contains($candidateHobby)) {
            $this->candidate_hobby->add($candidateHobby);
            $candidateHobby->setCandidate($this);
        }

        return $this;
    }

    public function removeCandidateHobby(HasHobby $candidateHobby): static
    {
        if ($this->candidate_hobby->removeElement($candidateHobby)) {
            // set the owning side to null (unless already changed)
            if ($candidateHobby->getCandidate() === $this) {
                $candidateHobby->setCandidate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ProfessionnalExperience>
     */
    public function getCandidateExperience(): Collection
    {
        return $this->candidate_experience;
    }

    public function addCandidateExperience(ProfessionnalExperience $candidateExperience): static
    {
        if (!$this->candidate_experience->contains($candidateExperience)) {
            $this->candidate_experience->add($candidateExperience);
            $candidateExperience->setCandidate($this);
        }

        return $this;
    }

    public function removeCandidateExperience(ProfessionnalExperience $candidateExperience): static
    {
        if ($this->candidate_experience->removeElement($candidateExperience)) {
            // set the owning side to null (unless already changed)
            if ($candidateExperience->getCandidate() === $this) {
                $candidateExperience->setCandidate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, HasApplied>
     */
    public function getCandidateApplications(): Collection
    {
        return $this->candidate_applications;
    }

    public function addCandidateApplication(HasApplied $candidateApplication): static
    {
        if (!$this->candidate_applications->contains($candidateApplication)) {
            $this->candidate_applications->add($candidateApplication);
            $candidateApplication->setCandidate($this);
        }

        return $this;
    }

    public function removeCandidateApplication(HasApplied $candidateApplication): static
    {
        if ($this->candidate_applications->removeElement($candidateApplication)) {
            // set the owning side to null (unless already changed)
            if ($candidateApplication->getCandidate() === $this) {
                $candidateApplication->setCandidate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, HasFaved>
     */
    public function getCandidateFavorite(): Collection
    {
        return $this->candidate_favorite;
    }

    public function addCandidateFavorite(HasFaved $candidateFavorite): static
    {
        if (!$this->candidate_favorite->contains($candidateFavorite)) {
            $this->candidate_favorite->add($candidateFavorite);
            $candidateFavorite->setCandidate($this);
        }

        return $this;
    }

    public function removeCandidateFavorite(HasFaved $candidateFavorite): static
    {
        if ($this->candidate_favorite->removeElement($candidateFavorite)) {
            // set the owning side to null (unless already changed)
            if ($candidateFavorite->getCandidate() === $this) {
                $candidateFavorite->setCandidate(null);
            }
        }

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return Collection<int, CandidateHasRole>
     */
    public function getCandidateRole(): Collection
    {
        return $this->candidate_role;
    }

    public function addCandidateRole(CandidateHasRole $candidateRole): static
    {
        if (!$this->candidate_role->contains($candidateRole)) {
            $this->candidate_role->add($candidateRole);
            $candidateRole->setCandidateId($this);
        }

        return $this;
    }

    public function removeCandidateRole(CandidateHasRole $candidateRole): static
    {
        if ($this->candidate_role->removeElement($candidateRole)) {
            // set the owning side to null (unless already changed)
            if ($candidateRole->getCandidateId() === $this) {
                $candidateRole->setCandidateId(null);
            }
        }

        return $this;
    }
}
