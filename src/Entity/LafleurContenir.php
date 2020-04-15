<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LafleurContenirRepository")
 */
class LafleurContenir
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $cdeMoment;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $cdeClient;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $produit;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCdeMoment(): ?string
    {
        return $this->cdeMoment;
    }

    public function setCdeMoment(string $cdeMoment): self
    {
        $this->cdeMoment = $cdeMoment;

        return $this;
    }

    public function getCdeClient(): ?string
    {
        return $this->cdeClient;
    }

    public function setCdeClient(string $cdeClient): self
    {
        $this->cdeClient = $cdeClient;

        return $this;
    }

    public function getProduit(): ?string
    {
        return $this->produit;
    }

    public function setProduit(string $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }
}
