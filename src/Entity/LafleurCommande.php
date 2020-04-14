<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LafleurCommande
 *
 * @ORM\Table(name="lafleur_commande")
 * @ORM\Entity(repositoryClass="App\Repository\LafleurCommandeRepository")
 */
class LafleurCommande
{
    /**
     * @var string
     *
     * @ORM\Column(name="cde_moment", type="string", length=20, nullable=false, options={"default"="''"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cdeMoment = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cde_client", type="string", length=5, nullable=false, options={"default"="''"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cdeClient = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cde_date", type="string", length=10, nullable=false, options={"default"="'0000-00-00'"})
     */
    private $cdeDate = '\'0000-00-00\'';

    public function getCdeMoment(): ?string
    {
        return $this->cdeMoment;
    }

    public function getCdeClient(): ?string
    {
        return $this->cdeClient;
    }

    public function getCdeDate(): ?string
    {
        return $this->cdeDate;
    }

    public function setCdeDate(string $cdeDate): self
    {
        $this->cdeDate = $cdeDate;

        return $this;
    }


}
