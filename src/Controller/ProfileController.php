<?php

namespace App\Controller;

use App\Repository\ProfileRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\FeedbackFormType;
use App\Entity\Feedback;
use App\Entity\{Participant, User};
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(ProfileRepository $profileRepository, Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $id = $user->getId();
        $participant = $entityManager->getRepository(Participant::class)->findOneBy(['user' => $id]);

        $feedback = new Feedback();
        $formFeed = $this->createForm(FeedbackFormType::class, $feedback);
        $formFeed->handleRequest($request);
        if ($formFeed->isSubmitted()) {
            $feedback = $formFeed->getData();
            $entityManager->persist($feedback);
            $entityManager->flush();
        }
        return $this->render('profile/index.html.twig', [
            'controller_name' => 'ProfileController',
            'profile' => $profileRepository->findAll(),
            'formFeed' => $formFeed,
            'participant' => $participant,
        ]);
    }
}
