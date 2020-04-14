<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cv
 *
 * @ORM\Table(name="cv", indexes={@ORM\Index(name="FOREIGN_CAT_CV", columns={"type_cv"})})
 * @ORM\Entity(repositoryClass="CvRepository")
 */
class Cv
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
     * @ORM\Column(name="titre_cv", type="string", length=255, nullable=false)
     */
    private $titreCv;

    /**
     * @var string
     *
     * @ORM\Column(name="etablissement_cv", type="string", length=255, nullable=false)
     */
    private $etablissementCv;

    /**
     * @var string
     *
     * @ORM\Column(name="description_cv", type="string", length=500, nullable=false)
     */
    private $descriptionCv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_entree_cv", type="date", nullable=false)
     */
    private $dateEntreeCv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_sortie_cv", type="date", nullable=false)
     */
    private $dateSortieCv;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_cv", type="string", length=255, nullable=false)
     */
    private $villeCv;

    /**
     * @var string
     *
     * @ORM\Column(name="logo_cv", type="string", length=255, nullable=false)
     */
    private $logoCv;

    /**
     * @var \CatCv
     *
     * @ORM\ManyToOne(targetEntity="CatCv")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_cv", referencedColumnName="id")
     * })
     */
    private $typeCv;

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

    public function getEtablissementCv(): ?string
    {
        return $this->etablissementCv;
    }

    public function setEtablissementCv(string $etablissementCv): self
    {
        $this->etablissementCv = $etablissementCv;

        return $this;
    }

    public function getDescriptionCv(): ?string
    {
        return $this->descriptionCv;
    }

    public function setDescriptionCv(string $descriptionCv): self
    {
        $this->descriptionCv = $descriptionCv;

        return $this;
    }

    public function getDateEntreeCv(): ?\DateTimeInterface
    {
        return $this->dateEntreeCv;
    }

    public function setDateEntreeCv(\DateTimeInterface $dateEntreeCv): self
    {
        $this->dateEntreeCv = $dateEntreeCv;

        return $this;
    }

    public function getDateSortieCv(): ?\DateTimeInterface
    {
        return $this->dateSortieCv;
    }

    public function setDateSortieCv(\DateTimeInterface $dateSortieCv): self
    {
        $this->dateSortieCv = $dateSortieCv;

        return $this;
    }

    public function getVilleCv(): ?string
    {
        return $this->villeCv;
    }

    public function setVilleCv(string $villeCv): self
    {
        $this->villeCv = $villeCv;

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

    public function getTypeCv(): ?CatCv
    {
        return $this->typeCv;
    }

    public function setTypeCv(?CatCv $typeCv): self
    {
        $this->typeCv = $typeCv;

        return $this;
    }


}
