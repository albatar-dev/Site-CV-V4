<?php

namespace App\Controller;

use App\Form\ContactFormType;
use App\Entity\MessagesInternes;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

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
        } else {
            $this->addFlash('danger', 'Errerur lors de l\'envoi de votre message !');
        }

        return $this->render('contact/index.html.twig', ['form'=>$form->createView()]);
    }
}
