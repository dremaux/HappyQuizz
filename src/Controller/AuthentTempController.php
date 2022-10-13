<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthentTempController extends AbstractController
{
    #[Route('/authent/temp', name: 'app_authent_temp')]
    public function index(): Response
    {
        return $this->render('authent_temp/index.html.twig', [
            'controller_name' => 'AuthentTempController',
        ]);
    }
}
