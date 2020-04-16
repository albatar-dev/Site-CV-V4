<?php

namespace App\Controller;

use App\Entity\Projets;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjetsController extends AbstractController
{
    /**
     * @Route("/projets/{id}", name="projets")
     */
    public function index(Projets $projet)
    {   


        return $this->render('projets/index.html.twig', compact('projet'));
    }
}
