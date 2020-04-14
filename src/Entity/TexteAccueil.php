<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TexteAccueil
 *
 * @ORM\Table(name="texte_accueil")
 * @ORM\Entity
 */
class TexteAccueil
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
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", length=65535, nullable=false)
     */
    private $texte;

    /**
     * @var bool
     *
     * @ORM\Column(name="alert_accueil", type="boolean", nullable=false)
     */
    private $alertAccueil;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(string $texte): self
    {
        $this->texte = $texte;

        return $this;
    }

    public function getAlertAccueil(): ?bool
    {
        return $this->alertAccueil;
    }

    public function setAlertAccueil(bool $alertAccueil): self
    {
        $this->alertAccueil = $alertAccueil;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }


}
