<?php

namespace App\Controller;

use App\Entity\TexteAccueil;
use App\Form\TexteAccueilFormType;
use App\Repository\TexteAccueilRepository;
use Symfony\Component\HttpFoundation\Request;
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
        $donnees = $repo->findBy([],['position'=>'ASC']);
        $user = $this->getUser();
        return $this->render('accueil/index.html.twig', compact('donnees', 'user'));
    }

    /**
     * @Route("/accueil/{id}/edit", name="accueil.edit", methods={"GET", "PATCH"})
     */
    public function edit(TexteAccueil $texteAccueil, Request $request){

        $form = $this->createForm(TexteAccueilFormType::class,$texteAccueil, ['method'=>'PATCH']);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em->persist($texteAccueil);
            $em->flush();

            $this->addFlash('success', 'Votre message a bien été envoyé.');

            return $this->redirectToRoute('accueil');
        }

        return $this->render('accueil/edit.html.twig', ['form'=>$form->createView()]);
    }
}
