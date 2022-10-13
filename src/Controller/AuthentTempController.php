<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\CoinsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Twig\Environment;

class AuthentTempController extends AbstractController
{

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    #[Route('/authent/temp', name: 'app_authent_temp')]
    public function index(Request $request, EntityManagerInterface $manager): Response 
    {
        $user = $this->getUser();
        
        $form = $this->createForm(CoinsType::class, $user);
        
        $form->handleRequest($request);
        if($form->isSubmitted()) {
            $user = $form->getData();
            $manager->persist($user);
            $manager->flush();
        }

        return $this->render('pages/home.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
