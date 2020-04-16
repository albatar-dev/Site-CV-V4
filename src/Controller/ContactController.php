<?php

namespace App\Controller;

use App\Form\ContactFormType;
use App\Entity\MessagesInternes;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\MessagesInternesRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact", methods = {"GET", "POST"})
     */
    public function index(Request $request, EntityManagerInterface $em) : Response
    {
        $message = new MessagesInternes();
        $form = $this->createForm(ContactFormType::class,$message);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em->persist($message);
            $em->flush();

            $this->addFlash('success', 'Votre message a bien été envoyé.');

            return $this->redirectToRoute('contact');
        }

        return $this->render('contact/index.html.twig', ['form'=>$form->createView()]);
    }

    /**
     * @Route("/messages", name="messages.show")
     */

     function show(MessagesInternesRepository $repo){
        $messages = $repo->findBy(['visibleOnSite'=>true, 'statut'=>'C'], ['datePost'=>'ASC']);

        return $this->render('contact/show.html.twig', compact('messages'));
     }
}
