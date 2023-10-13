<?php

namespace App\Entity;

use App\Repository\HasContractRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HasContractRepository::class)]
class HasContract
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'contract_type_which_has')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ContractType $contract_type = null;

    #[ORM\ManyToOne(inversedBy: 'contract_length_who_has')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ContractLength $contract_length = null;

    #[ORM\OneToOne(mappedBy: 'contract_type', cascade: ['persist', 'remove'])]
    private ?JobOffer $contract_who_has = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContractType(): ?ContractType
    {
        return $this->contract_type;
    }

    public function setContractType(?ContractType $contract_type): static
    {
        $this->contract_type = $contract_type;

        return $this;
    }

    public function getContractLength(): ?ContractLength
    {
        return $this->contract_length;
    }

    public function setContractLength(?ContractLength $contract_length): static
    {
        $this->contract_length = $contract_length;

        return $this;
    }

    public function getContractWhoHas(): ?JobOffer
    {
        return $this->contract_who_has;
    }

    public function setContractWhoHas(JobOffer $contract_who_has): static
    {
        // set the owning side of the relation if necessary
        if ($contract_who_has->getContractType() !== $this) {
            $contract_who_has->setContractType($this);
        }

        $this->contract_who_has = $contract_who_has;

        return $this;
    }
}
