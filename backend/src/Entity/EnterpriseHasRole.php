<?php

namespace App\Entity;

use App\Repository\EnterpriseHasRoleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EnterpriseHasRoleRepository::class)]
class EnterpriseHasRole
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'enterprise_role')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Enterprise $enterprise_id = null;

    #[ORM\ManyToOne(inversedBy: 'enterprise_whohas_role')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Role $role_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnterpriseId(): ?Enterprise
    {
        return $this->enterprise_id;
    }

    public function setEnterpriseId(?Enterprise $enterprise_id): static
    {
        $this->enterprise_id = $enterprise_id;

        return $this;
    }

    public function getRoleId(): ?Role
    {
        return $this->role_id;
    }

    public function setRoleId(?Role $role_id): static
    {
        $this->role_id = $role_id;

        return $this;
    }
}
