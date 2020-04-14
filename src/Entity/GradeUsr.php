<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GradeUsr
 *
 * @ORM\Table(name="grade_usr")
 * @ORM\Entity(repositoryClass="App\Repository\GradeUsrRepository")
 */
class GradeUsr
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
     * @ORM\Column(name="grade", type="string", length=255, nullable=false)
     */
    private $grade;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGrade(): ?string
    {
        return $this->grade;
    }

    public function setGrade(string $grade): self
    {
        $this->grade = $grade;

        return $this;
    }


}
