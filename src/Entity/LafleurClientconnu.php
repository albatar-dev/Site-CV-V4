<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LafleurClientconnu
 *
 * @ORM\Table(name="lafleur_clientconnu")
 * @ORM\Entity(repositoryClass="App\Repository\LafleurClientconnuRepository")
 */
class LafleurClientconnu
{
    /**
     * @var string
     *
     * @ORM\Column(name="clt_code", type="string", length=5, nullable=false, options={"default"="''"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cltCode = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="clt_nom", type="string", length=30, nullable=false, options={"default"="''"})
     */
    private $cltNom = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="clt_adresse", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $cltAdresse = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="clt_tel", type="string", length=20, nullable=false, options={"default"="''"})
     */
    private $cltTel = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="clt_email", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $cltEmail = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="clt_motPasse", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $cltMotpasse = '\'\'';

    public function getCltCode(): ?string
    {
        return $this->cltCode;
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

    public function getCltMotpasse(): ?string
    {
        return $this->cltMotpasse;
    }

    public function setCltMotpasse(string $cltMotpasse): self
    {
        $this->cltMotpasse = $cltMotpasse;

        return $this;
    }


}
