<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LafleurCategorieRepository")
 */
class LafleurCategorie
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
    private $catCode;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $catLibelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCatCode(): ?string
    {
        return $this->catCode;
    }

    public function setCatCode(string $catCode): self
    {
        $this->catCode = $catCode;

        return $this;
    }

    public function getCatLibelle(): ?string
    {
        return $this->catLibelle;
    }

    public function setCatLibelle(string $catLibelle): self
    {
        $this->catLibelle = $catLibelle;

        return $this;
    }
}
