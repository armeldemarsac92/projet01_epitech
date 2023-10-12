<?php

namespace App\Entity;

use App\Repository\ContractTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContractTypeRepository::class)]
class ContractType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 25)]
    private ?string $contract_type = null;

    #[ORM\OneToMany(mappedBy: 'contract_type', targetEntity: HasContract::class, orphanRemoval: true)]
    private Collection $contract_type_which_has;

    public function __construct()
    {
        $this->contract_type_which_has = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContractType(): ?string
    {
        return $this->contract_type;
    }

    public function setContractType(string $contract_type): static
    {
        $this->contract_type = $contract_type;

        return $this;
    }

    /**
     * @return Collection<int, HasContract>
     */
    public function getContractTypeWhichHas(): Collection
    {
        return $this->contract_type_which_has;
    }

    public function addContractTypeWhichHa(HasContract $contractTypeWhichHa): static
    {
        if (!$this->contract_type_which_has->contains($contractTypeWhichHa)) {
            $this->contract_type_which_has->add($contractTypeWhichHa);
            $contractTypeWhichHa->setContractType($this);
        }

        return $this;
    }

    public function removeContractTypeWhichHa(HasContract $contractTypeWhichHa): static
    {
        if ($this->contract_type_which_has->removeElement($contractTypeWhichHa)) {
            // set the owning side to null (unless already changed)
            if ($contractTypeWhichHa->getContractType() === $this) {
                $contractTypeWhichHa->setContractType(null);
            }
        }

        return $this;
    }
}
