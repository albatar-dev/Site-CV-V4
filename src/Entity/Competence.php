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
     * @ORM\OneToMany(targetEntity="App\Entity\CvCompetence", mappedBy="competence")
     */
    private $cvCompetence;

    public function __construct()
    {
        $this->experiences = new ArrayCollection();
        $this->cvCompetences = new ArrayCollection();
        $this->cvCompetence = new ArrayCollection();
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
     * @return Collection|CvCompetence[]
     */
    public function getCvCompetence(): Collection
    {
        return $this->cvCompetence;
    }

    public function addCvCompetence(CvCompetence $cvCompetence): self
    {
        if (!$this->cvCompetence->contains($cvCompetence)) {
            $this->cvCompetence[] = $cvCompetence;
            $cvCompetence->setCompetence($this);
        }

        return $this;
    }

    public function removeCvCompetence(CvCompetence $cvCompetence): self
    {
        if ($this->cvCompetence->contains($cvCompetence)) {
            $this->cvCompetence->removeElement($cvCompetence);
            // set the owning side to null (unless already changed)
            if ($cvCompetence->getCompetence() === $this) {
                $cvCompetence->setCompetence(null);
            }
        }

        return $this;
    }
}
