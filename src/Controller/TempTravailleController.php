<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TempTravailleController extends AbstractController
{
    #[Route('/temp/travaille', name: 'app_temp_travaille')]
    public function index(): Response
    {
        return $this->render('temp_travaille/index.html.twig', [
            'controller_name' => 'TempTravailleController',
        ]);
    }
}
