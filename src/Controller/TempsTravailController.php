<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TempsTravailController extends AbstractController
{
    #[Route('/temps/travail', name: 'app_temps_travail')]
    public function index(EntityManagerInterface $manager): Response
    {
        $user = $this->getUser();
        
        // set connectionDate
        $user->setConnectionDate(time());
        $manager->persist($user);
        $manager->flush();
        return $this->redirectToRoute('home');

        return $this->render('temps_travail/index.html.twig', [
            'controller_name' => 'TempsTravailController',
        ]);
    }
}
