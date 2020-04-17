<?php

namespace App\Controller;

use App\Repository\TexteAccueilRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     * @Route("/")
     */
    public function index(TexteAccueilRepository $repo)
    {
        $user = $this->getUser();
        $donnees = $repo->findBy([],['position'=>'ASC']);
        return $this->render('accueil/index.html.twig', compact('donnees', 'user'));
    }
}
