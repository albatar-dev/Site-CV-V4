<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * V2Projet
 *
 * @ORM\Table(name="v2_projet")
 * @ORM\Entity(repositoryClass="App\Repository\V2ProjetRepository")
 */
class V2Projet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pjt", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPjt;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_pjt", type="string", length=255, nullable=false)
     */
    private $nomPjt;

    /**
     * @var string
     *
     * @ORM\Column(name="screen_pjt", type="string", length=255, nullable=false)
     */
    private $screenPjt;

    /**
     * @var string
     *
     * @ORM\Column(name="link_pjt", type="string", length=255, nullable=false)
     */
    private $linkPjt;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_pjt", type="string", length=255, nullable=false)
     */
    private $descPjt;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255, nullable=false)
     */
    private $categorie;

    public function getIdPjt(): ?int
    {
        return $this->idPjt;
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
