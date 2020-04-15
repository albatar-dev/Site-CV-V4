<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CatCvRepository")
 */
class CatCv
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
    private $ctCv;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $catCvImage;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Cv", mappedBy="type")
     */
    private $cvs;

    public function __construct()
    {
        $this->cvs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCtCv(): ?string
    {
        return $this->ctCv;
    }

    public function setCtCv(string $ctCv): self
    {
        $this->ctCv = $ctCv;

        return $this;
    }

    public function getCatCvImage(): ?string
    {
        return $this->catCvImage;
    }

    public function setCatCvImage(string $catCvImage): self
    {
        $this->catCvImage = $catCvImage;

        return $this;
    }

    /**
     * @return Collection|Cv[]
     */
    public function getCvs(): Collection
    {
        return $this->cvs;
    }

    public function addCv(Cv $cv): self
    {
        if (!$this->cvs->contains($cv)) {
            $this->cvs[] = $cv;
            $cv->setType($this);
        }

        return $this;
    }

    public function removeCv(Cv $cv): self
    {
        if ($this->cvs->contains($cv)) {
            $this->cvs->removeElement($cv);
            // set the owning side to null (unless already changed)
            if ($cv->getType() === $this) {
                $cv->setType(null);
            }
        }

        return $this;
    }
}
