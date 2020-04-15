<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LafleurProduitRepository")
 */
class LafleurProduit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $pdtRef;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $pdtDesignation;

    /**
     * @ORM\Column(type="decimal", precision=6, scale=2)
     */
    private $pdtPrix;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $pdtImage;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $pdtCategorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPdtRef(): ?string
    {
        return $this->pdtRef;
    }

    public function setPdtRef(string $pdtRef): self
    {
        $this->pdtRef = $pdtRef;

        return $this;
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
