<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoleRepository::class)]
class Role
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $role = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $role_description = null;

    #[ORM\OneToMany(mappedBy: 'role_id', targetEntity: CandidateHasRole::class, orphanRemoval: true)]
    private Collection $role_candidate_whohas;

    #[ORM\OneToMany(mappedBy: 'role_id', targetEntity: EnterpriseHasRole::class, orphanRemoval: true)]
    private Collection $enterprise_whohas_role;

    public function __construct()
    {
        $this->enterprise_whohas_role = new ArrayCollection();
        $this->candidate_whohas_role = new ArrayCollection();
        $this->role_candidate_whohas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;

        return $this;
    }

    public function getRoleDescription(): ?string
    {
        return $this->role_description;
    }

    public function setRoleDescription(?string $role_description): static
    {
        $this->role_description = $role_description;

        return $this;
    }

    /**
     * @return Collection<int, CandidateHasRole>
     */
    public function getRoleCandidateWhohas(): Collection
    {
        return $this->role_candidate_whohas;
    }

    public function addRoleCandidateWhoha(CandidateHasRole $roleCandidateWhoha): static
    {
        if (!$this->role_candidate_whohas->contains($roleCandidateWhoha)) {
            $this->role_candidate_whohas->add($roleCandidateWhoha);
            $roleCandidateWhoha->setRoleId($this);
        }

        return $this;
    }

    public function removeRoleCandidateWhoha(CandidateHasRole $roleCandidateWhoha): static
    {
        if ($this->role_candidate_whohas->removeElement($roleCandidateWhoha)) {
            // set the owning side to null (unless already changed)
            if ($roleCandidateWhoha->getRoleId() === $this) {
                $roleCandidateWhoha->setRoleId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, EnterpriseHasRole>
     */
    public function getEnterpriseWhohasRole(): Collection
    {
        return $this->enterprise_whohas_role;
    }

    public function addEnterpriseWhohasRole(EnterpriseHasRole $enterpriseWhohasRole): static
    {
        if (!$this->enterprise_whohas_role->contains($enterpriseWhohasRole)) {
            $this->enterprise_whohas_role->add($enterpriseWhohasRole);
            $enterpriseWhohasRole->setRoleId($this);
        }

        return $this;
    }

    public function removeEnterpriseWhohasRole(EnterpriseHasRole $enterpriseWhohasRole): static
    {
        if ($this->enterprise_whohas_role->removeElement($enterpriseWhohasRole)) {
            // set the owning side to null (unless already changed)
            if ($enterpriseWhohasRole->getRoleId() === $this) {
                $enterpriseWhohasRole->setRoleId(null);
            }
        }

        return $this;
    }

}