<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LafleurClientconnuRepository")
 */
class LafleurClientconnu
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $cltCode;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $cltNom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cltAdresse;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $cltTel;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cltEmail;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $cltMotPasse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCltCode(): ?string
    {
        return $this->cltCode;
    }

    public function setCltCode(string $cltCode): self
    {
        $this->cltCode = $cltCode;

        return $this;
    }

    public function getCltNom(): ?string
    {
        return $this->cltNom;
    }

    public function setCltNom(string $cltNom): self
    {
        $this->cltNom = $cltNom;

        return $this;
    }

    public function getCltAdresse(): ?string
    {
        return $this->cltAdresse;
    }

    public function setCltAdresse(string $cltAdresse): self
    {
        $this->cltAdresse = $cltAdresse;

        return $this;
    }

    public function getCltTel(): ?string
    {
        return $this->cltTel;
    }

    public function setCltTel(string $cltTel): self
    {
        $this->cltTel = $cltTel;

        return $this;
    }

    public function getCltEmail(): ?string
    {
        return $this->cltEmail;
    }

    public function setCltEmail(string $cltEmail): self
    {
        $this->cltEmail = $cltEmail;

        return $this;
    }

    public function getCltMotPasse(): ?string
    {
        return $this->cltMotPasse;
    }

    public function setCltMotPasse(string $cltMotPasse): self
    {
        $this->cltMotPasse = $cltMotPasse;

        return $this;
    }
}
