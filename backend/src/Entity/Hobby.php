<?php

namespace App\Entity;

use App\Repository\HobbyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HobbyRepository::class)]
class Hobby
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 80)]
    private ?string $hobby_name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $hobby_about = null;

    #[ORM\OneToMany(mappedBy: 'hobby', targetEntity: HasHobby::class, orphanRemoval: true)]
    private Collection $hobby_whohas;

    public function __construct()
    {
        $this->hobby_whohas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHobbyName(): ?string
    {
        return $this->hobby_name;
    }

    public function setHobbyName(string $hobby_name): static
    {
        $this->hobby_name = $hobby_name;

        return $this;
    }

    public function getHobbyAbout(): ?string
    {
        return $this->hobby_about;
    }

    public function setHobbyAbout(?string $hobby_about): static
    {
        $this->hobby_about = $hobby_about;

        return $this;
    }

    /**
     * @return Collection<int, HasHobby>
     */
    public function getHobbyWhohas(): Collection
    {
        return $this->hobby_whohas;
    }

    public function addHobbyWhoha(HasHobby $hobbyWhoha): static
    {
        if (!$this->hobby_whohas->contains($hobbyWhoha)) {
            $this->hobby_whohas->add($hobbyWhoha);
            $hobbyWhoha->setHobby($this);
        }

        return $this;
    }

    public function removeHobbyWhoha(HasHobby $hobbyWhoha): static
    {
        if ($this->hobby_whohas->removeElement($hobbyWhoha)) {
            // set the owning side to null (unless already changed)
            if ($hobbyWhoha->getHobby() === $this) {
                $hobbyWhoha->setHobby(null);
            }
        }

        return $this;
    }
}
