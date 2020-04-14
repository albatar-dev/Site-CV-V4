<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="FOREIGN_USR_GRAD", columns={"grade_usr"})})
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
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
     * @ORM\Column(name="pseudo_usr", type="string", length=255, nullable=false)
     */
    private $pseudoUsr;

    /**
     * @var string
     *
     * @ORM\Column(name="pass_usr", type="string", length=255, nullable=false)
     */
    private $passUsr;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_usr", type="string", length=255, nullable=false)
     */
    private $mailUsr;

    /**
     * @var \GradeUsr
     *
     * @ORM\ManyToOne(targetEntity="GradeUsr")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grade_usr", referencedColumnName="id")
     * })
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

    public function getPassUsr(): ?string
    {
        return $this->passUsr;
    }

    public function setPassUsr(string $passUsr): self
    {
        $this->passUsr = $passUsr;

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
