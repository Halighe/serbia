<?php

namespace App\Controller;

use App\Entity\Feedback;
use App\Form\FeedbackFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class BaseController extends AbstractController
{
    // #[Route('/base', name: 'app_base')]
    public function index(EntityManagerInterface $entityManager, Request $request): Response
    {
        $feedback = new Feedback();
        $formFeed = $this->createForm(FeedbackFormType::class, $feedback);
        $formFeed->handleRequest($request);
        if ($formFeed->isSubmitted()) {
            $feedback = $formFeed->getData();
            $entityManager->persist($feedback);
            $entityManager->flush();
        }
        
        return $this->render('base/index.html.twig', [
            'controller_name' => 'BaseController',
            'formFeed' => $formFeed,
        ]);
    }
}
