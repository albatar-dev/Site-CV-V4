<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
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
    private $pseudoUsr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pssUsr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mailUsr;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\GradeUsr", inversedBy="users")
     */
    private $gradeUsr;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudoUsr(): ?string
    {
        return $this->pseudoUsr;
    }

    public function setPseudoUsr(string $pseudoUsr): self
    {
        $this->pseudoUsr = $pseudoUsr;

        return $this;
    }

    public function getPssUsr(): ?string
    {
        return $this->pssUsr;
    }

    public function setPssUsr(string $pssUsr): self
    {
        $this->pssUsr = $pssUsr;

        return $this;
    }

    public function getMailUsr(): ?string
    {
        return $this->mailUsr;
    }

    public function setMailUsr(string $mailUsr): self
    {
        $this->mailUsr = $mailUsr;

        return $this;
    }

    public function getGradeUsr(): ?GradeUsr
    {
        return $this->gradeUsr;
    }

    public function setGradeUsr(?GradeUsr $gradeUsr): self
    {
        $this->gradeUsr = $gradeUsr;

        return $this;
    }
}
