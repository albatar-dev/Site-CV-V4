<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MessagesInternesRepository")
 */
class MessagesInternes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Le nom est obligatoire !")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $entreprise;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Veuillez préciser votre email.")
     * @Assert\Email(message="Veuillez entrer une adresse email valide.")
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(message="Veuillez entrer un titre à votre message.")
     */
    private $titreMessage;

    /**
     * @ORM\Column(type="string", length=500)
     * @Assert\NotBlank(message="Veuillez entrer un message.")
     * @Assert\Length(min=20, minMessage="Votre message doit comporter au moins {{ limit }} caractères.")
     */
    private $message;

    /**
     * @ORM\Column(type="boolean")
     */
    private $visibleOnSite;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $statut;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datePost;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateConfirm;


    //initialisation des valeurs par défaut.
    function __construct(){
        $this->datePost = new DateTime();
        $this->statut = 'AC';
        $this->dateConfirm = null;
    }

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

    public function setEntreprise(?string $entreprise): self
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

    public function getTitreMessage(): ?string
    {
        return $this->titreMessage;
    }

    public function setTitreMessage(string $titreMessage): self
    {
        $this->titreMessage = $titreMessage;

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

    public function getVisibleOnSite(): ?int
    {
        return $this->visibleOnSite;
    }

    public function setVisibleOnSite(?int $visibleOnSite): self
    {
        $this->visibleOnSite = $visibleOnSite;

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

    public function setDateConfirm(?\DateTimeInterface $dateConfirm): self
    {
        $this->dateConfirm = $dateConfirm;

        return $this;
    }
}
