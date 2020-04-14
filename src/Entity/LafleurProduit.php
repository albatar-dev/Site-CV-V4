<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LafleurProduit
 *
 * @ORM\Table(name="lafleur_produit")
 * @ORM\Entity(repositoryClass="App\Repository\LafleurProduitRepository")
 */
class LafleurProduit
{
    /**
     * @var string
     *
     * @ORM\Column(name="pdt_ref", type="string", length=3, nullable=false, options={"default"="''","fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pdtRef = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pdt_designation", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $pdtDesignation = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pdt_prix", type="decimal", precision=5, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $pdtPrix = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pdt_image", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $pdtImage = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pdt_categorie", type="string", length=3, nullable=false, options={"default"="''","fixed"=true})
     */
    private $pdtCategorie = '\'\'';

    public function getPdtRef(): ?string
    {
        return $this->pdtRef;
    }

    public function getPdtDesignation(): ?string
    {
        return $this->pdtDesignation;
    }

    public function setPdtDesignation(string $pdtDesignation): self
    {
        $this->pdtDesignation = $pdtDesignation;

        return $this;
    }

    public function getPdtPrix(): ?string
    {
        return $this->pdtPrix;
    }

    public function setPdtPrix(string $pdtPrix): self
    {
        $this->pdtPrix = $pdtPrix;

        return $this;
    }

    public function getPdtImage(): ?string
    {
        return $this->pdtImage;
    }

    public function setPdtImage(string $pdtImage): self
    {
        $this->pdtImage = $pdtImage;

        return $this;
    }

    public function getPdtCategorie(): ?string
    {
        return $this->pdtCategorie;
    }

    public function setPdtCategorie(string $pdtCategorie): self
    {
        $this->pdtCategorie = $pdtCategorie;

        return $this;
    }


}
