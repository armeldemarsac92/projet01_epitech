<?php

namespace App\Entity;

use App\Repository\ToolRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ToolRepository::class)]
class Tool
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 80)]
    private ?string $tool_name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tool_icon = null;

    #[ORM\OneToMany(mappedBy: 'tool', targetEntity: UsedTool::class, orphanRemoval: true)]
    private Collection $tool_which_has;

    #[ORM\OneToMany(mappedBy: 'tool', targetEntity: RequiredTool::class, orphanRemoval: true)]
    private Collection $tool_who_needs;

    public function __construct()
    {
        $this->tool_which_has = new ArrayCollection();
        $this->tool_who_needs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getToolName(): ?string
    {
        return $this->tool_name;
    }

    public function setToolName(string $tool_name): static
    {
        $this->tool_name = $tool_name;

        return $this;
    }

    public function getToolIcon(): ?string
    {
        return $this->tool_icon;
    }

    public function setToolIcon(?string $tool_icon): static
    {
        $this->tool_icon = $tool_icon;

        return $this;
    }

    /**
     * @return Collection<int, UsedTool>
     */
    public function getToolWhichHas(): Collection
    {
        return $this->tool_which_has;
    }

    public function addToolWhichHa(UsedTool $toolWhichHa): static
    {
        if (!$this->tool_which_has->contains($toolWhichHa)) {
            $this->tool_which_has->add($toolWhichHa);
            $toolWhichHa->setTool($this);
        }

        return $this;
    }

    public function removeToolWhichHa(UsedTool $toolWhichHa): static
    {
        if ($this->tool_which_has->removeElement($toolWhichHa)) {
            // set the owning side to null (unless already changed)
            if ($toolWhichHa->getTool() === $this) {
                $toolWhichHa->setTool(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, RequiredTool>
     */
    public function getToolWhoNeeds(): Collection
    {
        return $this->tool_who_needs;
    }

    public function addToolWhoNeed(RequiredTool $toolWhoNeed): static
    {
        if (!$this->tool_who_needs->contains($toolWhoNeed)) {
            $this->tool_who_needs->add($toolWhoNeed);
            $toolWhoNeed->setTool($this);
        }

        return $this;
    }

    public function removeToolWhoNeed(RequiredTool $toolWhoNeed): static
    {
        if ($this->tool_who_needs->removeElement($toolWhoNeed)) {
            // set the owning side to null (unless already changed)
            if ($toolWhoNeed->getTool() === $this) {
                $toolWhoNeed->setTool(null);
            }
        }

        return $this;
    }
}
