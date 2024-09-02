<?php

namespace App\Controller;

use App\Entity\{Participant, User};
use App\Form\{PeronalType, PasswordType};
use App\Form\FeedbackFormType;
use App\Entity\Feedback;
use App\Repository\ParticipantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class PersonalPageController extends AbstractController
{
    #[Route('/perspage', name: 'app_personal_page')]
    public function index(EntityManagerInterface $entityManager, Request $request): Response
    {   
        $participant = new Participant();
        $formPers = $this->createForm(PeronalType::class, $participant);
        $formPers->handleRequest($request);
        $user = $this->getUser();
        $id = $user->getId();
        $participant = $entityManager->getRepository(Participant::class)->findOneBy(['user' => $id]);

        if ($formPers->isSubmitted()) {
                $participant = $formPers->getData();                
                $entityManager->persist($participant);
                $entityManager->flush();
    
                // $repository = $entityManager->getRepository(User::class);
                // $getUser = $repository->findOneBy(['username' => $recipient]);
                // $participant->setUser($getUser->getId());
                // $entityManager->persist($participant);
                // $entityManager->flush();
        }

        $feedback = new Feedback();
        $formFeed = $this->createForm(FeedbackFormType::class, $feedback);
        $formFeed->handleRequest($request);
        if ($formFeed->isSubmitted()) {
            $feedback = $formFeed->getData();
            $entityManager->persist($feedback);
            $entityManager->flush();
        }
        // $newuser = new User();
        // // $newPass = new User();
        // $formPass = $this->createForm(PasswordType::class, $newuser);
        // $formPass->handleRequest($request);
        // if ($formPass->isSubmitted()) {
        //     $newuser = $formPass->getData();                
        //     $entityManager->persist($newuser);
        //     $entityManager->flush();

            // $repository = $entityManager->getRepository(User::class);
            // $getUser = $repository->findOneBy(['username' => $recipient]);
            // $participant->setUser($getUser->getId());
            // $entityManager->persist($participant);
            // $entityManager->flush();
        // }

        return $this->render('personal_page/index.html.twig', [
            'controller_name' => 'PersonalPageController',
            'participant' => $participant,
            'formPers' => $formPers,
            'formFeed' => $formFeed,
            // 'formPass' => $formPass,
        ]);
    }
}
