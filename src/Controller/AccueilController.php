<?php

namespace App\Controller;

use App\Entity\TexteAccueil;
use App\Form\TexteAccueilFormType;
use Doctrine\ORM\EntityManagerInterface;
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
     * @route("/accueil/create",name="accueil.create", methods={"GET", "POST"})
     */
     function create(Request $request, EntityManagerInterface $em)
     {
         $texteAccueil = new TexteAccueil();
 
         $form = $this->createForm(TexteAccueilFormType::class, $texteAccueil);
 
 
         $form->handleRequest($request);
 
         if($form->isSubmitted() && $form->isValid()) {
             $em->persist($texteAccueil);
             $em->flush();
 
             $this->addFlash('success', 'Billet créé');
 
             return $this->redirectToRoute('accueil');
         }
 
 
         return $this->render('accueil/partials/_form.html.twig', [
             'event'=>$texteAccueil,
             'form'=>$form->createView()
         ]);
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


    /**
     * @Route("/accueil/{id}/delete", name="accueil.delete", methods={"DELETE"})
     */
     public function delete(TexteAccueil $texteAccueil, Request $request, EntityManagerInterface $em){
        if ($this->isCsrfTokenValid('delete', $request->request->get('_token'))) {
            $em->remove($texteAccueil);
            $em->flush();

            $this->addFlash('danger', 'Billet supprimé');
        }

        return $this->redirectToRoute('accueil');
     }
}
