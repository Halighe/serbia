<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\FeedbackFormType;
use App\Entity\Feedback;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class MapController extends AbstractController
{
    #[Route('/map', name: 'app_map')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $feedback = new Feedback();
        $formFeed = $this->createForm(FeedbackFormType::class, $feedback);
        $formFeed->handleRequest($request);
        if ($formFeed->isSubmitted()) {
            $feedback = $formFeed->getData();
            $entityManager->persist($feedback);
            $entityManager->flush();
        }

        return $this->render('map/index.html.twig', [
            'controller_name' => 'MapController',
            'formFeed' => $formFeed,
        ]);
    }
}
