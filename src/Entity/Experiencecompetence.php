<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experiencecompetence
 *
 * @ORM\Table(name="experiencecompetence", indexes={@ORM\Index(name="FOREIGN_COMP", columns={"id_competence"}), @ORM\Index(name="FOREIGN_XP", columns={"id_experience"})})
 * @ORM\Entity(repositoryClass="App\Repository\ExperiencecompetenceRepository")
 */
class Experiencecompetence
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
     * @var int
     *
     * @ORM\Column(name="xp", type="integer", nullable=false)
     */
    private $xp;

    /**
     * @var \Competence
     *
     * @ORM\ManyToOne(targetEntity="Competence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_competence", referencedColumnName="id")
     * })
     */
    private $idCompetence;

    /**
     * @var \Cv
     *
     * @ORM\ManyToOne(targetEntity="Cv")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_experience", referencedColumnName="id")
     * })
     */
    private $idExperience;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getXp(): ?int
    {
        return $this->xp;
    }

    public function setXp(int $xp): self
    {
        $this->xp = $xp;

        return $this;
    }

    public function getIdCompetence(): ?Competence
    {
        return $this->idCompetence;
    }

    public function setIdCompetence(?Competence $idCompetence): self
    {
        $this->idCompetence = $idCompetence;

        return $this;
    }

    public function getIdExperience(): ?Cv
    {
        return $this->idExperience;
    }

    public function setIdExperience(?Cv $idExperience): self
    {
        $this->idExperience = $idExperience;

        return $this;
    }


}
