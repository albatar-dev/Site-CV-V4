<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LafleurContenir
 *
 * @ORM\Table(name="lafleur_contenir")
 * @ORM\Entity(repositoryClass="App\Repository\LafleurContenirRepository")
 */
class LafleurContenir
{
    /**
     * @var string
     *
     * @ORM\Column(name="cde_moment", type="string", length=20, nullable=false, options={"default"="''"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cdeMoment = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cde_client", type="string", length=5, nullable=false, options={"default"="''"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cdeClient = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="produit", type="string", length=3, nullable=false, options={"default"="''","fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $produit = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite = '0';

    public function getCdeMoment(): ?string
    {
        return $this->cdeMoment;
    }

    public function getCdeClient(): ?string
    {
        return $this->cdeClient;
    }

    public function getProduit(): ?string
    {
        return $this->produit;
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
