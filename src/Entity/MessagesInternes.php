<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessagesInternes
 *
 * @ORM\Table(name="messages_internes")
 * @ORM\Entity(repositoryClass="App\Repository\MessagesInternesRepository")
 */
class MessagesInternes
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
     * @ORM\Column(name="nom", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="entreprise", type="string", length=100, nullable=false)
     */
    private $entreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=100, nullable=false)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="titreMessage", type="string", length=100, nullable=false)
     */
    private $titremessage;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=false)
     */
    private $message;

    /**
     * @var bool
     *
     * @ORM\Column(name="visibleOnSite", type="boolean", nullable=false)
     */
    private $visibleonsite;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=2, nullable=false)
     */
    private $statut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_post", type="datetime", nullable=false)
     */
    private $datePost;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_confirm", type="datetime", nullable=false)
     */
    private $dateConfirm;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEntreprise(): ?string
    {
        return $this->entreprise;
    }

    public function setEntreprise(string $entreprise): self
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getTitremessage(): ?string
    {
        return $this->titremessage;
    }

    public function setTitremessage(string $titremessage): self
    {
        $this->titremessage = $titremessage;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getVisibleonsite(): ?bool
    {
        return $this->visibleonsite;
    }

    public function setVisibleonsite(bool $visibleonsite): self
    {
        $this->visibleonsite = $visibleonsite;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getDatePost(): ?\DateTimeInterface
    {
        return $this->datePost;
    }

    public function setDatePost(\DateTimeInterface $datePost): self
    {
        $this->datePost = $datePost;

        return $this;
    }

    public function getDateConfirm(): ?\DateTimeInterface
    {
        return $this->dateConfirm;
    }

    public function setDateConfirm(\DateTimeInterface $dateConfirm): self
    {
        $this->dateConfirm = $dateConfirm;

        return $this;
    }


}
