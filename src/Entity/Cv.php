<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CvRepository")
 */
class Cv
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
    private $titreCv;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etablissement;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $description;

    /**
     * @ORM\Column(type="date")
     */
    private $dateEntree;

    /**
     * @ORM\Column(type="date")
     */
    private $dateSortie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $logoCv;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CatCv", inversedBy="cvs")
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CvCompetence", mappedBy="cv")
     */
    private $CvCompetences;

    public function __construct()
    {
        $this->competences = new ArrayCollection();
        $this->CvCompetences = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreCv(): ?string
    {
        return $this->titreCv;
    }

    public function setTitreCv(string $titreCv): self
    {
        $this->titreCv = $titreCv;

        return $this;
    }

    public function getEtablissement(): ?string
    {
        return $this->etablissement;
    }

    public function setEtablissement(string $etablissement): self
    {
        $this->etablissement = $etablissement;

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

    public function getDateEntree(): ?\DateTimeInterface
    {
        return $this->dateEntree;
    }

    public function setDateEntree(string $dateEntree): self
    {
        $this->dateEntree = $dateEntree;

        return $this;
    }

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->dateSortie;
    }

    public function setDateSortie(\DateTimeInterface $dateSortie): self
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getLogoCv(): ?string
    {
        return $this->logoCv;
    }

    public function setLogoCv(string $logoCv): self
    {
        $this->logoCv = $logoCv;

        return $this;
    }

    public function getType(): ?CatCv
    {
        return $this->type;
    }

    public function setType(?CatCv $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection|CvCompetence[]
     */
    public function getCvCompetences(): Collection
    {
        return $this->CvCompetences;
    }

    public function addCvCompetence(CvCompetence $cvCompetence): self
    {
        if (!$this->CvCompetences->contains($cvCompetence)) {
            $this->CvCompetences[] = $cvCompetence;
            $cvCompetence->setCv($this);
        }

        return $this;
    }

    public function removeCvCompetence(CvCompetence $cvCompetence): self
    {
        if ($this->CvCompetences->contains($cvCompetence)) {
            $this->CvCompetences->removeElement($cvCompetence);
            // set the owning side to null (unless already changed)
            if ($cvCompetence->getCv() === $this) {
                $cvCompetence->setCv(null);
            }
        }

        return $this;
    }

}
