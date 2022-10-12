<?php
namespace App\Controller;

use App\Entity\Reponse;
use App\Entity\User;
use App\Form\ReponseLibreType;
use App\Form\ReponseONType;
use App\Form\ReponseQCMType;
use App\Repository\QuestionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;


class ShopController extends AbstractController
{

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @Route("/randomQuestion", name="randomQuestion")
     * @return Response
     */
    public function index(Request $request, EntityManagerInterface $manager, QuestionRepository $questionRepository): Response
    {
        $reponse = new Reponse();
        $user = $this->getUser();

        $idQuestion = random_int(1, $questionRepository->count([]));

        $form = $this->createForm(ReponseONType::class, $reponse);
        $form->handleRequest($request);
        if($form->isSubmitted()) {

            $reponsetest = $form->getData();
            $reponse2 = new Reponse();
            $reponse2->setIdUser($user->getId());
            $reponse2->setIdQuestion($idQuestion);
            $reponse2->setValue($reponsetest->getValue());

            $manager->persist($reponse2);
            $manager->flush();
            return $this->redirectToRoute('merci');
        }

        $form2 = $this->createForm(ReponseLibreType::class, $reponse);
        $form2->handleRequest($request);
        if($form2->isSubmitted()) {

            $reponsetest = $form2->getData();
            $reponse2 = new Reponse();
            $reponse2->setIdUser($user->getId());
            $reponse2->setIdQuestion($idQuestion);
            $reponse2->setValue($reponsetest->getValue());

            $manager->persist($reponse2);
            $manager->flush();
            return $this->redirectToRoute('merci');
        }

        $form3 = $this->createForm(ReponseQCMType::class, $reponse);
        $form3->handleRequest($request);
        if($form3->isSubmitted()) {

            $reponsetest = $form3->getData();
            $reponse2 = new Reponse();
            $reponse2->setIdUser($user->getId());
            $reponse2->setIdQuestion($idQuestion);
            $reponse2->setValue($reponsetest->getValue());

            $manager->persist($reponse2);
            $manager->flush();
            return $this->redirectToRoute('merci');
        }

        return $this->render('randomQuestion/home.html.twig', [
            'question' => $questionRepository->find($idQuestion),
            'form' => $form->createView(),
            'form2' => $form2->createView(),
            'form3' => $form3->createView()
        ]);

    }

}