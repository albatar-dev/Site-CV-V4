<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatCv
 *
 * @ORM\Table(name="cat_cv")
 * @ORM\Entity(repositoryClass="App\Repository\CatCvRepository")
 */
class CatCv
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
     * @ORM\Column(name="cat_cv", type="string", length=255, nullable=false)
     */
    private $catCv;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_cv_image", type="string", length=255, nullable=false)
     */
    private $catCvImage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCatCv(): ?string
    {
        return $this->catCv;
    }

    public function setCatCv(string $catCv): self
    {
        $this->catCv = $catCv;

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


}
