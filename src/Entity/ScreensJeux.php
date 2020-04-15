<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ScreensJeuxRepository")
 */
class ScreensJeux
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
    private $versionJeux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $screenJeux;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Jeux", inversedBy="screensJeux")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idJeux;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVersionJeux(): ?string
    {
        return $this->versionJeux;
    }

    public function setVersionJeux(string $versionJeux): self
    {
        $this->versionJeux = $versionJeux;

        return $this;
    }

    public function getScreenJeux(): ?string
    {
        return $this->screenJeux;
    }

    public function setScreenJeux(string $screenJeux): self
    {
        $this->screenJeux = $screenJeux;

        return $this;
    }

    public function getIdJeux(): ?Jeux
    {
        return $this->idJeux;
    }

    public function setIdJeux(?Jeux $idJeux): self
    {
        $this->idJeux = $idJeux;

        return $this;
    }
}
