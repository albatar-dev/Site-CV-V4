<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjetsAfpa
 *
 * @ORM\Table(name="projets_afpa", indexes={@ORM\Index(name="FOREIGN_PROJETS_AFPA_PROJETS", columns={"id_projet"})})
 * @ORM\Entity
 */
class ProjetsAfpa
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
     * @ORM\Column(name="version_projet", type="string", length=255, nullable=false)
     */
    private $versionProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="cahier_charges_projet", type="text", length=65535, nullable=false)
     */
    private $cahierChargesProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="solutions_projet", type="text", length=65535, nullable=false)
     */
    private $solutionsProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="screen_projet", type="string", length=255, nullable=false)
     */
    private $screenProjet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date", nullable=false)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="github_link", type="string", length=255, nullable=false)
     */
    private $githubLink;

    /**
     * @var string
     *
     * @ORM\Column(name="bdd_link", type="string", length=255, nullable=false)
     */
    private $bddLink;

    /**
     * @var string
     *
     * @ORM\Column(name="cahier_charges_link", type="string", length=255, nullable=false)
     */
    private $cahierChargesLink;

    /**
     * @var string
     *
     * @ORM\Column(name="projet_link", type="string", length=255, nullable=false)
     */
    private $projetLink;

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

    public function getVersionProjet(): ?string
    {
        return $this->versionProjet;
    }

    public function setVersionProjet(string $versionProjet): self
    {
        $this->versionProjet = $versionProjet;

        return $this;
    }

    public function getCahierChargesProjet(): ?string
    {
        return $this->cahierChargesProjet;
    }

    public function setCahierChargesProjet(string $cahierChargesProjet): self
    {
        $this->cahierChargesProjet = $cahierChargesProjet;

        return $this;
    }

    public function getSolutionsProjet(): ?string
    {
        return $this->solutionsProjet;
    }

    public function setSolutionsProjet(string $solutionsProjet): self
    {
        $this->solutionsProjet = $solutionsProjet;

        return $this;
    }

    public function getScreenProjet(): ?string
    {
        return $this->screenProjet;
    }

    public function setScreenProjet(string $screenProjet): self
    {
        $this->screenProjet = $screenProjet;

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

    public function getGithubLink(): ?string
    {
        return $this->githubLink;
    }

    public function setGithubLink(string $githubLink): self
    {
        $this->githubLink = $githubLink;

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
