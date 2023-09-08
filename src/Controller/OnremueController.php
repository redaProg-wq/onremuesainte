<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OnremueController extends AbstractController
{
    #[Route('/onremue', name: 'app_onremue')]
    public function index(): Response
    {
        return $this->render('onremue/index.html.twig', [
            'controller_name' => 'OnremueController',
        ]);
    }
}
