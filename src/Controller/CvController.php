<?php

namespace App\Controller;

use App\Repository\CvRepository;
use App\Repository\CatCvRepository;
use App\Repository\CompetenceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CvController extends AbstractController
{
    /**
     * @Route("/cv", name="cv")
     */
    public function index()//CatCvRepository $catRepo, CompetenceRepository $compRepo, CvRepository $cvRepo, EntityManagerInterface $em)
    {

            
        /*$x = $cvRepo->findBy(['id'=>1]);
        
          
        dd($x);
        
           
        

        
        $categories = $catRepo->findAll();
        foreach($categories as $c){
            $experiences[$c->getCatCv()] = $c->getExperiences();
        }
        $competences = $compRepo->findAll();*/
        return $this->render('cv/index.html.twig');//, compact('experiences', 'competences', 'categories'));
    }
}
