<?php

namespace App\Entity;

use App\Repository\CertificationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CertificationRepository::class)]
class Certification
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $certification_name = null;

    #[ORM\OneToMany(mappedBy: 'certification', targetEntity: HasCertification::class, orphanRemoval: true)]
    private Collection $certification_whohas;

    public function __construct()
    {
        $this->certification_whohas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCertificationName(): ?string
    {
        return $this->certification_name;
    }

    public function setCertificationName(string $certification_name): static
    {
        $this->certification_name = $certification_name;

        return $this;
    }

    /**
     * @return Collection<int, HasCertification>
     */
    public function getCertificationWhohas(): Collection
    {
        return $this->certification_whohas;
    }

    public function addCertificationWhoha(HasCertification $certificationWhoha): static
    {
        if (!$this->certification_whohas->contains($certificationWhoha)) {
            $this->certification_whohas->add($certificationWhoha);
            $certificationWhoha->setCertification($this);
        }

        return $this;
    }

    public function removeCertificationWhoha(HasCertification $certificationWhoha): static
    {
        if ($this->certification_whohas->removeElement($certificationWhoha)) {
            // set the owning side to null (unless already changed)
            if ($certificationWhoha->getCertification() === $this) {
                $certificationWhoha->setCertification(null);
            }
        }

        return $this;
    }
}
