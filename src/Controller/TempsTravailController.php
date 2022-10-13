<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TempsTravailController extends AbstractController
{
    #[Route('/temps/travail', name: 'app_temps_travail')]
    public function index(): Response
    {
        return $this->render('temps_travail/index.html.twig', [
            'controller_name' => 'TempsTravailController',
        ]);
    }
}
