<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\UsersType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(EntityManagerInterface $em, Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {

        $user= New Users();
        $userForm= $this->createForm(UsersType::class, $user);
        $userForm->handleRequest($request);


        if ($userForm->isSubmitted() && $userForm->isValid())

        {
                $user->setPassword($passwordHasher->hashPassword($user,$user->getPassword()));
                $em->persist($user);
                $em->flush();
                return $this->redirectToRoute('app_connexion');
        }



        return $this->render('security/login.html.twig', [
            'form'=> $userForm->createView()
        ]);
    }

    #[Route('/connexion', name: 'app_connexion')]
    public function connexion(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils ->getLastAuthenticationError();
        $username= $authenticationUtils->getLastUsername();

      return $this->render('security/connexion.html.twig', [

        'error'=>$error,
        'username'=>$username
      ]);
      
    }
}
