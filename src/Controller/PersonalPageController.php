<?php

namespace App\Controller;

use App\Entity\{Participant, User};
use App\Form\{PeronalType, RecoveryPasswordType};
use App\Form\FeedbackFormType;
use App\Entity\Feedback;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PersonalPageController extends AbstractController
{
    #[Route('/perspage', name: 'app_personal_page')]
    public function index(UserPasswordHasherInterface $userPasswordHasher, Security $security, 
    EntityManagerInterface $entityManager, Request $request): Response
    {   
        $participant = new Participant();
        $formPers = $this->createForm(PeronalType::class, $participant);
        $formPers->handleRequest($request);
        $user = $this->getUser();
        $id = $user->getId();
        $participant = $entityManager->getRepository(Participant::class)->findOneBy(['user' => $id]);
    
        if ($formPers->isSubmitted()) {
                $participant->setFio($formPers->get('fio')->getData());
                $participant->setEmail($formPers->get('email')->getData());  
                $participant->setCategory($formPers->get('category')->getData());
                $participant->setCity($formPers->get('city')->getData()); 
                $participant->setSchool($formPers->get('school')->getData());
                $participant->setRepresentative($formPers->get('representative')->getData());              
                // $entityManager->persist($participant);
                $entityManager->flush();
        
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
        $formPass = $this->createForm(RecoveryPasswordType::class);
        $formPass->handleRequest($request);
        if ($formPass->isSubmitted()) {
            $newuser = $formPass->getData();
            // var_dump($newuser['password']);
            $hash = $user->getPassword();
            if(password_verify($newuser['password'], $hash)){            
                if($formPass->get('newpassword')->getData() == $formPass->get('repeatpassword')->getData()) 
                {                
                    $user->setPassword(
                        $userPasswordHasher->hashPassword(
                            $user,
                            $formPass->get('newpassword')->getData()
                        )
                    );
                    $entityManager->persist($user);
                    $entityManager->flush();
                }     
                else echo "Введенные пароли не совпадают";            
            }
            else echo "Введен неверный пароль";
        }

        return $this->render('personal_page/index.html.twig', [
            'controller_name' => 'PersonalPageController',
            'participant' => $participant,
            'formPers' => $formPers,
            'formFeed' => $formFeed,
            'formPass' => $formPass,
        ]);
    }
}
