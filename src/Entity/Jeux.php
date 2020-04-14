<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jeux
 *
 * @ORM\Table(name="jeux", indexes={@ORM\Index(name="FOREIGN_JEUX_PROJETS", columns={"id_projet"})})
 * @ORM\Entity
 */
class Jeux
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="version_jeux", type="string", length=255, nullable=false)
     */
    private $versionJeux;

    /**
     * @var string
     *
     * @ORM\Column(name="idee_jeux", type="text", length=65535, nullable=false)
     */
    private $ideeJeux;

    /**
     * @var string
     *
     * @ORM\Column(name="solution_jeux", type="text", length=65535, nullable=false)
     */
    private $solutionJeux;

    /**
     * @var string
     *
     * @ORM\Column(name="regles_jeux", type="text", length=65535, nullable=false)
     */
    private $reglesJeux;

    /**
     * @var string
     *
     * @ORM\Column(name="commandes_jeux", type="text", length=65535, nullable=false)
     */
    private $commandesJeux;

    /**
     * @var string
     *
     * @ORM\Column(name="github_link", type="string", length=255, nullable=false)
     */
    private $githubLink;

    /**
     * @var string
     *
     * @ORM\Column(name="projet_link", type="string", length=255, nullable=false)
     */
    private $projetLink;

    /**
     * @var string
     *
     * @ORM\Column(name="bdd_link", type="string", length=255, nullable=false)
     */
    private $bddLink;

    /**
     * @var string
     *
     * @ORM\Column(name="cahier_charges", type="string", length=255, nullable=false)
     */
    private $cahierCharges;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date", nullable=false)
     */
    private $dateCreation;

    /**
     * @var \Projets
     *
     * @ORM\ManyToOne(targetEntity="Projets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_projet", referencedColumnName="id")
     * })
     */
    private $idProjet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVersionJeux(): ?string
    {
        return $this->versionJeux;
    }

    public function setVersionJeux(string $versionJeux): self
    {
        $this->versionJeux = $versionJeux;

        return $this;
    }

    public function getIdeeJeux(): ?string
    {
        return $this->ideeJeux;
    }

    public function setIdeeJeux(string $ideeJeux): self
    {
        $this->ideeJeux = $ideeJeux;

        return $this;
    }

    public function getSolutionJeux(): ?string
    {
        return $this->solutionJeux;
    }

    public function setSolutionJeux(string $solutionJeux): self
    {
        $this->solutionJeux = $solutionJeux;

        return $this;
    }

    public function getReglesJeux(): ?string
    {
        return $this->reglesJeux;
    }

    public function setReglesJeux(string $reglesJeux): self
    {
        $this->reglesJeux = $reglesJeux;

        return $this;
    }

    public function getCommandesJeux(): ?string
    {
        return $this->commandesJeux;
    }

    public function setCommandesJeux(string $commandesJeux): self
    {
        $this->commandesJeux = $commandesJeux;

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

    public function getIdProjet(): ?Projets
    {
        return $this->idProjet;
    }

    public function setIdProjet(?Projets $idProjet): self
    {
        $this->idProjet = $idProjet;

        return $this;
    }


}
