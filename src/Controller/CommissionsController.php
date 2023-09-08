<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class CommissionsController extends AbstractController

{
    #[Route('commissions', name: 'app_commissions_')]
    public function index(): Response
    {
        return $this->render('commissions/index.html.twig', [
            'controller_name' => 'CommissionsController',
        ]);
    }

    #[Route('commissions/bar', name: 'bar')]
    public function bar(): Response
    {
        return $this->render('commissions/bar.html.twig', [
            'controller_name' => 'CommissionsController',
        ]);
    }
}
