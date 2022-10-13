<?php

namespace App\Controller\Admin;

use App\Entity\Option;
use App\Entity\Reponse;
use App\Form\ReponseLibreType;
use App\Form\ReponseONType;
use App\Form\ReponseQCMType;
use App\Repository\OptionRepository;
use App\Repository\QuestionRepository;
use App\Repository\ReponseRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

/**
* @var OptionRepository
*/
#[Route('/admin/reponse')]
class AdminReponseController extends AbstractController
{

    public function __construct(ReponseRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    #[Route('/', name: 'admin.reponse.index', methods: ['GET'])]
    public function index(ReponseRepository $reponseRepository, QuestionRepository $questionReponsitory, UserRepository $userRepository): Response
    {
        return $this->render('admin/reponse/index.html.twig', [
            'reponses'  => $reponseRepository->findAll(),
            'questions' => $questionReponsitory->findAll(),
            'users'     => $userRepository->findAll()
        ]);
    }

    #[Route('/new', name: 'admin.reponse.new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $reponse = new Reponse();
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reponse);
            $entityManager->flush();

            return $this->redirectToRoute('admin.reponse.index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/reponse/new.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin.reponse.edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reponse $reponse): Response
    {
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin.reponse.index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/reponse/edit.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    /**
     * @Route("admin/reponse/delete/{id}", name="admin.reponse.delete")
     * @param Option $option
     * @return \Symfony\Component\HttpFoudattion\RedirectResponse
     */
    public function delete(Reponse $reponse, Request $request)
    {    
        if ($this->isCsrfTokenValid('delete' . $reponse->getId(), $request->get('_token')))
        {
            $this->em->remove($reponse);
            $this->em->flush();
            $this->addFlash('success', 'suppression de votre bien');
        }
        return $this->redirectToRoute('admin.reponse.index');
    }

    #[Route('/choix', name: 'admin.reponse.choix', methods: ['GET'])]
    public function choix(ReponseRepository $reponseRepository): Response
    {
        return $this->render('admin/reponse/choix.html.twig', [
            'reponses' => $reponseRepository->findAll(),
        ]);
    }






    #[Route('/new/QCM', name: 'admin.reponse.newQCM', methods: ['GET', 'POST'])]
    public function newQCM(Request $request): Response
    {
        $reponse = new Reponse();
        $form = $this->createForm(ReponseQCMType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reponse);
            $entityManager->flush();

            return $this->redirectToRoute('admin.reponse.index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/reponse/newQCM.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/new/ON', name: 'admin.reponse.newON', methods: ['GET', 'POST'])]
    public function newON(Request $request): Response
    {
        $reponse = new Reponse();
        $form = $this->createForm(ReponseONType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reponse);
            $entityManager->flush();

            return $this->redirectToRoute('admin.reponse.index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/reponse/newON.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/new/Libre', name: 'admin.reponse.newLibre', methods: ['GET', 'POST'])]
    public function newLibre(Request $request): Response
    {
        $reponse = new Reponse();
        $form = $this->createForm(ReponseLibreType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reponse);
            $entityManager->flush();

            return $this->redirectToRoute('admin.reponse.index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/reponse/newLibre.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

}
