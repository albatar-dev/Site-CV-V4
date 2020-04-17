<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjetsAfpaRepository")
 */
class ProjetsAfpa
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
    private $version;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $cahierCharges;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $solutions;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $screen;

    /**
     * @ORM\Column(type="date")
     */
    private $dateCreation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $github;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bddLink;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cahierChargesLink;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $projetLink;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Projets", inversedBy="projetsAfpas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $projet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getCahierCharges(): ?string
    {
        return $this->cahierCharges;
    }

    public function setCahierCharges(string $cahierCharges): self
    {
        $this->cahierCharges = $cahierCharges;

        return $this;
    }

    public function getSolutions(): ?string
    {
        return $this->solutions;
    }

    public function setSolutions(string $solutions): self
    {
        $this->solutions = $solutions;

        return $this;
    }

    public function getScreen(): ?string
    {
        return $this->screen;
    }

    public function setScreen(string $screen): self
    {
        $this->screen = $screen;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getGithub(): ?string
    {
        return $this->github;
    }

    public function setGithub(string $github): self
    {
        $this->github = $github;

        return $this;
    }

    public function getBddLink(): ?string
    {
        return $this->bddLink;
    }

    public function setBddLink(string $bddLink): self
    {
        $this->bddLink = $bddLink;

        return $this;
    }

    public function getCahierChargesLink(): ?string
    {
        return $this->cahierChargesLink;
    }

    public function setCahierChargesLink(string $cahierChargesLink): self
    {
        $this->cahierChargesLink = $cahierChargesLink;

        return $this;
    }

    public function getProjetLink(): ?string
    {
        return $this->projetLink;
    }

    public function setProjetLink(string $projetLink): self
    {
        $this->projetLink = $projetLink;

        return $this;
    }

    public function getProjet(): ?Projets
    {
        return $this->projet;
    }

    public function setProjet(?Projets $projet): self
    {
        $this->projet = $projet;

        return $this;
    }
    
    
    public function __toString(){
        return ($this->projet->getTitreProjet() ." ". $this->version);
    }
}
