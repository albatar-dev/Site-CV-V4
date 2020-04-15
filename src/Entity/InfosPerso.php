<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InfosPersoRepository")
 */
class InfosPerso
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Permis;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Voiture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Localisation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Disponibilit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Mobilit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPermis(): ?string
    {
        return $this->Permis;
    }

    public function setPermis(?string $Permis): self
    {
        $this->Permis = $Permis;

        return $this;
    }

    public function getVoiture(): ?bool
    {
        return $this->Voiture;
    }

    public function setVoiture(bool $Voiture): self
    {
        $this->Voiture = $Voiture;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->Localisation;
    }

    public function setLocalisation(string $Localisation): self
    {
        $this->Localisation = $Localisation;

        return $this;
    }

    public function getDisponibilit(): ?string
    {
        return $this->Disponibilit;
    }

    public function setDisponibilit(string $Disponibilit): self
    {
        $this->Disponibilit = $Disponibilit;

        return $this;
    }

    public function getMobilit(): ?string
    {
        return $this->Mobilit;
    }

    public function setMobilit(?string $Mobilit): self
    {
        $this->Mobilit = $Mobilit;

        return $this;
    }
}
