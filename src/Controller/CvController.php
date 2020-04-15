<?php

namespace App\Controller;

use App\Repository\CvRepository;
use App\Repository\CatCvRepository;;
use App\Repository\CompetenceRepository;
use App\Repository\CvCompetenceRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CvController extends AbstractController
{
    /**
     * @Route("/cv", name="cv")
     */
    public function index(CatCvRepository $repo, CvCompetenceRepository $cvCompRepo, CvRepository $cvRepo, CompetenceRepository $compRepo)
    {
        $categories = $repo->findAll();
        $iCat = 0;
        foreach($categories as $categorie){
            $experiences = $cvRepo->findBy(['type'=>$categorie->getId()]);
            $iCvComp = 0;
            foreach($experiences as $experience){
                $cvComps = $cvCompRepo->findBy(['cv'=>$experience->getId()]);
                $experience->cvComp = $cvComps;
                $iCvComp++;
            }
            $categorie->experiences = $experiences;
            $iCat++;
        }
        return $this->render('cv/index.html.twig', compact('categories'));
    }
}
