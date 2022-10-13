<?php
namespace App\Controller;

use App\Entity\Reponse;
use App\Entity\User;
use App\Form\ReponseLibreType;
use App\Form\ReponseONType;
use App\Form\ReponseQCMType;
use App\Repository\QuestionRepository;
use App\Repository\RandomNumberRepository;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\Null_;
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
        $user = $this->getUser();
        
        // gitan style
        $gitanList = array(2,2,8,8,12,12,1,1,8,8,7,7,6,6,20,20,18,18,14,14,3,3,9,9,1,1);
        $gitanIndex = $user->getRandomNumber();
        $idQuestion2 = $gitanList[$gitanIndex];
        
        // $user->setRandomNumber($randomNumber);
        // $user->setLastPopupDate(time());
        // $manager->persist($user);
        // $manager->flush();

        

        // set response
        
        // $idQuestion = random_int(1, $questionRepository->count([]));
        
        $form = $this->createForm(ReponseONType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()) {

            $reponseForm = $form->getData();

            if($reponseForm->getAnonymous() == "Oui") {
                $reponseForm->setIdUser(Null);
            }else{
                $reponseForm->setIdUser($user->getId());
            }
        
            $reponseForm->setIdQuestion($idQuestion2);

            $manager->persist($reponseForm);
            $manager->flush();
            $user->setRandomNumber($gitanIndex + 1);
            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute('merci');
        }

        $form2 = $this->createForm(ReponseLibreType::class);
        $form2->handleRequest($request);
        if($form2->isSubmitted()) {

            $reponseForm = $form2->getData();

            if($reponseForm->getAnonymous() == "Oui") {
                $reponseForm->setIdUser(Null);
            }else{
                $reponseForm->setIdUser($user->getId());
            }
        
            $reponseForm->setIdQuestion($idQuestion2);

            $manager->persist($reponseForm);
            $manager->flush();
            $user->setRandomNumber($gitanIndex + 1);
            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute('merci');
        }

        $form3 = $this->createForm(ReponseQCMType::class);
        $form3->handleRequest($request);
        if($form3->isSubmitted()) {

            $reponseForm = $form3->getData();

            if($reponseForm->getAnonymous() == "Oui") {
                $reponseForm->setIdUser(Null);
            }else{
                $reponseForm->setIdUser($user->getId());
            }
        
            $reponseForm->setIdQuestion($idQuestion2);

            $manager->persist($reponseForm);
            $manager->flush();
            $user->setRandomNumber($gitanIndex + 1);
            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute('merci');
        }

        $user->setRandomNumber($gitanIndex + 1);
        $manager->persist($user);
        $manager->flush();

        return $this->render('randomQuestion/home.html.twig', [
            'question' => $questionRepository->find($idQuestion2),
            'form' => $form->createView(),
            'form2' => $form2->createView(),
            'form3' => $form3->createView()
        ]);

    }

}