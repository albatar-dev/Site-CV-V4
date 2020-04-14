<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 *
 * @ORM\Table(name="competence")
 * @ORM\Entity(repositoryClass="App\Repository\CompetenceRepository")
 */
class Competence
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
     * @ORM\Column(name="titre_comp", type="string", length=50, nullable=false)
     */
    private $titreComp;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau_comp", type="string", length=255, nullable=false)
     */
    private $niveauComp;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_comp", type="string", length=255, nullable=false)
     */
    private $catComp;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Cv", mappedBy="competences")
     */
    private $experiences;

    public function __construct()
    {
        $this->experiences = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreComp(): ?string
    {
        return $this->titreComp;
    }

    public function setTitreComp(string $titreComp): self
    {
        $this->titreComp = $titreComp;

        return $this;
    }

    public function getNiveauComp(): ?string
    {
        return $this->niveauComp;
    }

    public function setNiveauComp(string $niveauComp): self
    {
        $this->niveauComp = $niveauComp;

        return $this;
    }

    public function getCatComp(): ?string
    {
        return $this->catComp;
    }

    public function setCatComp(string $catComp): self
    {
        $this->catComp = $catComp;

        return $this;
    }

    /**
     * @return Collection|Cv[]
     */
    public function getExperiences(): Collection
    {
        return $this->experiences;
    }

    public function addExperience(Cv $experience): self
    {
        if (!$this->experiences->contains($experience)) {
            $this->experiences[] = $experience;
            $experience->addCompetence($this);
        }

        return $this;
    }

    public function removeExperience(Cv $experience): self
    {
        if ($this->experiences->contains($experience)) {
            $this->experiences->removeElement($experience);
            $experience->removeCompetence($this);
        }

        return $this;
    }


}
