<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScreensJeux
 *
 * @ORM\Table(name="screens_jeux", indexes={@ORM\Index(name="FOREIGN_SCREENS_JEUX", columns={"id_jeux"})})
 * @ORM\Entity
 */
class ScreensJeux
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
     * @ORM\Column(name="version_jeux", type="string", length=255, nullable=false)
     */
    private $versionJeux;

    /**
     * @var string
     *
     * @ORM\Column(name="screen_jeux", type="string", length=255, nullable=false)
     */
    private $screenJeux;

    /**
     * @var \Jeux
     *
     * @ORM\ManyToOne(targetEntity="Jeux")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_jeux", referencedColumnName="id")
     * })
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
