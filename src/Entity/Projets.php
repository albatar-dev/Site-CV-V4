<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projets
 *
 * @ORM\Table(name="projets")
 * @ORM\Entity(repositoryClass="App\Repository\ProjetsRepository")
 */
class Projets
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
     * @ORM\Column(name="titre_projet", type="string", length=255, nullable=false)
     */
    private $titreProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="description_projet", type="text", length=65535, nullable=false)
     */
    private $descriptionProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="nature_projet", type="string", length=255, nullable=false)
     */
    private $natureProjet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreProjet(): ?string
    {
        return $this->titreProjet;
    }

    public function setTitreProjet(string $titreProjet): self
    {
        $this->titreProjet = $titreProjet;

        return $this;
    }

    public function getDescriptionProjet(): ?string
    {
        return $this->descriptionProjet;
    }

    public function setDescriptionProjet(string $descriptionProjet): self
    {
        $this->descriptionProjet = $descriptionProjet;

        return $this;
    }

    public function getNatureProjet(): ?string
    {
        return $this->natureProjet;
    }

    public function setNatureProjet(string $natureProjet): self
    {
        $this->natureProjet = $natureProjet;

        return $this;
    }


}
