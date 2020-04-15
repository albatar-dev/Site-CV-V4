<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\V2ProjetRepository")
 */
class V2Projet
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
    private $nomPjt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $screenPjt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $linkPjt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descPjt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPjt(): ?string
    {
        return $this->nomPjt;
    }

    public function setNomPjt(string $nomPjt): self
    {
        $this->nomPjt = $nomPjt;

        return $this;
    }

    public function getScreenPjt(): ?string
    {
        return $this->screenPjt;
    }

    public function setScreenPjt(string $screenPjt): self
    {
        $this->screenPjt = $screenPjt;

        return $this;
    }

    public function getLinkPjt(): ?string
    {
        return $this->linkPjt;
    }

    public function setLinkPjt(string $linkPjt): self
    {
        $this->linkPjt = $linkPjt;

        return $this;
    }

    public function getDescPjt(): ?string
    {
        return $this->descPjt;
    }

    public function setDescPjt(string $descPjt): self
    {
        $this->descPjt = $descPjt;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }
}
