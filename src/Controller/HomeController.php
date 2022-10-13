<?php
namespace App\Controller;

use App\Entity\User;
use App\Form\CoinsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController extends AbstractController
{

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }


    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function index(EntityManagerInterface $manager): Response
    {

        $user = $this->getUser();
        if($user){
        // set connectionDate
        $user->setConnectionDate(time());
        $manager->persist($user);
        $manager->flush();
        }

        return $this->redirectToRoute('authentTemp');
    }
  
}
?>