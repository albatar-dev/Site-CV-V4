<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjetsRepository")
 */
class Projets
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titreProjet;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Jeux", mappedBy="projet")
     */
    private $jeux;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ProjetsAfpa", mappedBy="projet", orphanRemoval=true)
     */
    private $projetsAfpas;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $natureProjet;

    public function __construct()
    {
        $this->jeux = new ArrayCollection();
        $this->projetsAfpas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreProjet(): ?string
    {
        return $this->titreProjet;
    }

    public function setTitreProjet(string $titreProjet): self
    {
        $this->titreProjet = $titreProjet;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Jeux[]
     */
    public function getJeux(): Collection
    {
        return $this->jeux;
    }

    public function addJeux(Jeux $jeux): self
    {
        if (!$this->jeux->contains($jeux)) {
            $this->jeux[] = $jeux;
            $jeux->setProjet($this);
        }

        return $this;
    }

    public function removeJeux(Jeux $jeux): self
    {
        if ($this->jeux->contains($jeux)) {
            $this->jeux->removeElement($jeux);
            // set the owning side to null (unless already changed)
            if ($jeux->getProjet() === $this) {
                $jeux->setProjet(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ProjetsAfpa[]
     */
    public function getProjetsAfpas(): Collection
    {
        return $this->projetsAfpas;
    }

    public function addProjetsAfpa(ProjetsAfpa $projetsAfpa): self
    {
        if (!$this->projetsAfpas->contains($projetsAfpa)) {
            $this->projetsAfpas[] = $projetsAfpa;
            $projetsAfpa->setProjet($this);
        }

        return $this;
    }

    public function removeProjetsAfpa(ProjetsAfpa $projetsAfpa): self
    {
        if ($this->projetsAfpas->contains($projetsAfpa)) {
            $this->projetsAfpas->removeElement($projetsAfpa);
            // set the owning side to null (unless already changed)
            if ($projetsAfpa->getProjet() === $this) {
                $projetsAfpa->setProjet(null);
            }
        }

        return $this;
    }

    public function getNatureProjet(): ?string
    {
        return $this->natureProjet;
    }

    public function setNatureProjet(string $natureProjet): self
    {
        $this->natureProjet = $natureProjet;

        return $this;
    }
}
