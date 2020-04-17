<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
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

    public function getUsername(): ?string
    {
        return $this->pseudoUsr;
    }

    public function setUsername(string $pseudoUsr): self
    {
        $this->pseudoUsr = $pseudoUsr;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->pssUsr;
    }

    public function setPassword(string $pssUsr): self
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

    public function getRoles(): ?array
    {
        return array(0 => $this->gradeUsr->getGrade());
    }

    public function setRoles(?GradeUsr $gradeUsr): self
    {
        $this->gradeUsr = $gradeUsr;

        return $this;
    }

    public function getSalt()
    {
        return null;
    }

    public function eraseCredentials()
    {
        return false;
    }

    public function __toString(){
        return $this->pseudoUsr;
    }
}
