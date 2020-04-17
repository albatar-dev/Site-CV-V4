<?php

namespace App\Controller;

use App\Repository\ProjetsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HeaderController extends AbstractController
{
    public function projets(ProjetsRepository $repo)
    {
        $projets = $repo->findAll();
        $user = $this->getUser();
        return $this->render('partials/_header.html.twig', compact('projets', 'user'));
    }
}
