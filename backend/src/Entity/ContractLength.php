<?php

namespace App\Entity;

use App\Repository\ContractLengthRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContractLengthRepository::class)]
class ContractLength
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $contract_length = null;

    #[ORM\OneToMany(mappedBy: 'contract_length', targetEntity: HasContract::class, orphanRemoval: true)]
    private Collection $contract_length_who_has;

    public function __construct()
    {
        $this->contract_length_who_has = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContractLength(): ?string
    {
        return $this->contract_length;
    }

    public function setContractLength(string $contract_length): static
    {
        $this->contract_length = $contract_length;

        return $this;
    }

    /**
     * @return Collection<int, HasContract>
     */
    public function getContractLengthWhoHas(): Collection
    {
        return $this->contract_length_who_has;
    }

    public function addContractLengthWhoHa(HasContract $contractLengthWhoHa): static
    {
        if (!$this->contract_length_who_has->contains($contractLengthWhoHa)) {
            $this->contract_length_who_has->add($contractLengthWhoHa);
            $contractLengthWhoHa->setContractLength($this);
        }

        return $this;
    }

    public function removeContractLengthWhoHa(HasContract $contractLengthWhoHa): static
    {
        if ($this->contract_length_who_has->removeElement($contractLengthWhoHa)) {
            // set the owning side to null (unless already changed)
            if ($contractLengthWhoHa->getContractLength() === $this) {
                $contractLengthWhoHa->setContractLength(null);
            }
        }

        return $this;
    }
}
