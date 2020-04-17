<?php

namespace App\Controller;

use App\Repository\ProjetsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/x8ZbfdswdfzzerFSGERdqsgwsVSRE324sezef4754GVQGSRD8/", name="admin")
     */
    public function index()
    {
        return $this->render('admin/layout/admin.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    public function aside(ProjetsRepository $repo)
    {
        $projets = $repo->findAll();
        return $this->render('admin/partials/_aside.html.twig', compact('projets'));
    }
}
