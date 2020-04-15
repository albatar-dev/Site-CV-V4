<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LafleurCommandeRepository")
 */
class LafleurCommande
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
     * @ORM\Column(type="string", length=10)
     */
    private $cdeDate;

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

    public function getCdeDate(): ?string
    {
        return $this->cdeDate;
    }

    public function setCdeDate(string $cdeDate): self
    {
        $this->cdeDate = $cdeDate;

        return $this;
    }
}
