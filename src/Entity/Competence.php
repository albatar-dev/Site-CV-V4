<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompetenceRepository")
 */
class Competence
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $titreComp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $niveauComp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $catComp;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Cv", mappedBy="competences")
     */
    private $experiences;

    public function __construct()
    {
        $this->experiences = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreComp(): ?string
    {
        return $this->titreComp;
    }

    public function setTitreComp(string $titreComp): self
    {
        $this->titreComp = $titreComp;

        return $this;
    }

    public function getNiveauComp(): ?string
    {
        return $this->niveauComp;
    }

    public function setNiveauComp(string $niveauComp): self
    {
        $this->niveauComp = $niveauComp;

        return $this;
    }

    public function getCatComp(): ?string
    {
        return $this->catComp;
    }

    public function setCatComp(string $catComp): self
    {
        $this->catComp = $catComp;

        return $this;
    }

    /**
     * @return Collection|Cv[]
     */
    public function getExperiences(): Collection
    {
        return $this->experiences;
    }

    public function addExperience(Cv $experience): self
    {
        if (!$this->experiences->contains($experience)) {
            $this->experiences[] = $experience;
            $experience->addCompetence($this);
        }

        return $this;
    }

    public function removeExperience(Cv $experience): self
    {
        if ($this->experiences->contains($experience)) {
            $this->experiences->removeElement($experience);
            $experience->removeCompetence($this);
        }

        return $this;
    }
}
