<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JeuxRepository")
 */
class Jeux
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
     * @ORM\Column(type="string", length=255)
     */
    private $idee;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $solution;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $regles;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commandes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $githubLink;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $projetLink;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bddLink;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cahierCharges;

    /**
     * @ORM\Column(type="date")
     */
    private $dateCreation;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ScreensJeux", mappedBy="idJeux", orphanRemoval=true)
     */
    private $screensJeux;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Projets", inversedBy="jeux")
     * @ORM\JoinColumn(nullable=false)
     */
    private $projet;

    public function __construct()
    {
        $this->screensJeux = new ArrayCollection();
    }

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

    public function getIdee(): ?string
    {
        return $this->idee;
    }

    public function setIdee(string $idee): self
    {
        $this->idee = $idee;

        return $this;
    }

    public function getSolution(): ?string
    {
        return $this->solution;
    }

    public function setSolution(string $solution): self
    {
        $this->solution = $solution;

        return $this;
    }

    public function getRegles(): ?string
    {
        return $this->regles;
    }

    public function setRegles(string $regles): self
    {
        $this->regles = $regles;

        return $this;
    }

    public function getCommandes(): ?string
    {
        return $this->commandes;
    }

    public function setCommandes(string $commandes): self
    {
        $this->commandes = $commandes;

        return $this;
    }

    public function getGithubLink(): ?string
    {
        return $this->githubLink;
    }

    public function setGithubLink(string $githubLink): self
    {
        $this->githubLink = $githubLink;

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

    public function getBddLink(): ?string
    {
        return $this->bddLink;
    }

    public function setBddLink(string $bddLink): self
    {
        $this->bddLink = $bddLink;

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

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * @return Collection|ScreensJeux[]
     */
    public function getScreensJeux(): Collection
    {
        return $this->screensJeux;
    }

    public function addScreensJeux(ScreensJeux $screensJeux): self
    {
        if (!$this->screensJeux->contains($screensJeux)) {
            $this->screensJeux[] = $screensJeux;
            $screensJeux->setIdJeux($this);
        }

        return $this;
    }

    public function removeScreensJeux(ScreensJeux $screensJeux): self
    {
        if ($this->screensJeux->contains($screensJeux)) {
            $this->screensJeux->removeElement($screensJeux);
            // set the owning side to null (unless already changed)
            if ($screensJeux->getIdJeux() === $this) {
                $screensJeux->setIdJeux(null);
            }
        }

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
        return $this->version;
    }
}
