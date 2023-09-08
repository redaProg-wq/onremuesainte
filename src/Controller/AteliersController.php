<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




class AteliersController extends AbstractController
{
    #[Route('/ateliers', name: 'app_ateliers')]
    public function index(): Response
    {
        return $this->render('ateliers/index.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }

 
  

    #[Route('ateliers/dimanchedemots', name: 'app_ateliers_dimanchedemots')]
    public function dimanchedemots(): Response
    {
        return $this->render('ateliers/dimanchedemots.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }
    
    #[Route('ateliers/ateliersdecriture', name: 'app_ateliers_ateliersdecriture')]
    public function ateliersdecriture(): Response
    {
        return $this->render('ateliers/ateliersdecriture.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }
    
    #[Route('ateliers/troclecture', name: 'app_ateliers_troclecture')]
    public function troclecture(): Response
    {
        return $this->render('ateliers/troclecture.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }
    
    #[Route('ateliers/cafecontes', name: 'app_ateliers_cafecontes')]
    public function cafecontes(): Response
    {
        return $this->render('ateliers/cafecontes.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }

    #[Route('ateliers/lecturesfeministes', name: 'app_ateliers_lecturesfeministes')]
    public function lecturesfeministes(): Response
    {
        return $this->render('ateliers/lecturesfeministes.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }

    #[Route('ateliers/drinkanddraw', name: 'app_ateliers_drinkanddraw')]
    public function drinkanddraw(): Response
    {
        return $this->render('ateliers/drinkanddraw.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }

    #[Route('ateliers/coralarebela', name: 'app_ateliers_coralarebela')]
    public function coralarebela(): Response
    {
        return $this->render('ateliers/coralarebela.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }


    #[Route('ateliers/mardifolk', name: 'app_ateliers_mardifolk')]
    public function mardifolk(): Response
    {
        return $this->render('ateliers/mardifolk.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }


    #[Route('ateliers/cafedeslangues', name: 'app_ateliers_cafedeslangues')]
    public function cafedeslangues(): Response
    {
        return $this->render('ateliers/cafedeslangues.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }



    #[Route('ateliers/bouchesaoreilles', name: 'app_ateliers_bouchesaoreilles')]
    public function bouchesaoreilles(): Response
    {
        return $this->render('ateliers/bouchesaoreilles.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }

    #[Route('ateliers/gagarpitan', name: 'app_ateliers_gagarpitan')]
    public function gagarpitan(): Response
    {
        return $this->render('ateliers/gagarpitan.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }

    #[Route('ateliers/cafesignes', name: 'app_ateliers_cafesignes')]
    public function cafesignes(): Response
    {
        return $this->render('ateliers/cafesignes.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }

    #[Route('ateliers/ateliertricrochet', name: 'app_ateliers_ateliertricrochet')]
    public function ateliertricrochet(): Response
    {
        return $this->render('ateliers/ateliertricrochet.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }

    #[Route('ateliers/theatresinga', name: 'app_ateliers_theatresinga')]
    public function theatresinga(): Response
    {
        return $this->render('ateliers/theatresinga.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }

    #[Route('ateliers/dixmanchesdeuxpioches', name: 'app_ateliers_dixmanchesdeuxpioches')]
    public function dixmanchesdeuxpioches(): Response
    {
        return $this->render('ateliers/dixmanchesdeuxpioches.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }

    #[Route('ateliers/causerieslibertaires', name: 'app_ateliers_causerieslibertaires')]
    public function causerieslibertaires(): Response
    {
        return $this->render('ateliers/causerieslibertaires.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }

    #[Route('ateliers/lepointqueer', name: 'app_ateliers_lepointqueer')]
    public function lepointqueer(): Response
    {
        return $this->render('ateliers/lepointqueer.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }

    #[Route('ateliers/obsolescencedeprogramee', name: 'app_ateliers_obsolescencedeprogramee')]
    public function obsolescencedeprogramee(): Response
    {
        return $this->render('ateliers/obsolescencedeprogramee.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }


    #[Route('ateliers/scientificoludique', name: 'app_ateliers_scientificoludique')]
    public function scientificoludique(): Response
    {
        return $this->render('ateliers/scientificoludique.html.twig', [
            'controller_name' => 'AteliersController',
        ]);
    }
}
