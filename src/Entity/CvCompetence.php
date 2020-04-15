<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CvCompetenceRepository")
 */
class CvCompetence
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $niveau;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cv", inversedBy="CvCompetences")
     */
    private $cv;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Competence", inversedBy="cvCompetence")
     */
    private $competence;

    public function __construct()
    {
        $this->cv = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Cv[]
     */
    public function getCv(): Collection
    {
        return $this->cv;
    }

    public function addCv(Cv $cv): self
    {
        if (!$this->cv->contains($cv)) {
            $this->cv[] = $cv;
            $cv->setCvCompetence($this);
        }

        return $this;
    }

    public function removeCv(Cv $cv): self
    {
        if ($this->cv->contains($cv)) {
            $this->cv->removeElement($cv);
            // set the owning side to null (unless already changed)
            if ($cv->getCvCompetence() === $this) {
                $cv->setCvCompetence(null);
            }
        }

        return $this;
    }

    public function getCompetence(): ?Competence
    {
        return $this->competence;
    }

    public function setCompetence(?Competence $competence): self
    {
        $this->competence = $competence;

        return $this;
    }

    public function getNiveau(): ?int
    {
        return $this->niveau;
    }

    public function setNiveau(int $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function setCv(?Cv $cv): self
    {
        $this->cv = $cv;

        return $this;
    }
}
