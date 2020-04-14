<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LafleurCategorie
 *
 * @ORM\Table(name="lafleur_categorie")
 * @ORM\Entity(repositoryClass="App\Repository\LafleurCategorieRepository")
 */
class LafleurCategorie
{
    /**
     * @var string
     *
     * @ORM\Column(name="cat_code", type="string", length=3, nullable=false, options={"default"="''","fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $catCode = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cat_libelle", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $catLibelle = '\'\'';

    public function getCatCode(): ?string
    {
        return $this->catCode;
    }

    public function getCatLibelle(): ?string
    {
        return $this->catLibelle;
    }

    public function setCatLibelle(string $catLibelle): self
    {
        $this->catLibelle = $catLibelle;

        return $this;
    }


}
