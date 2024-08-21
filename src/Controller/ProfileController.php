<?php

namespace App\Controller;

use App\Repository\ProfileRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(ProfileRepository $profileRepository): Response
    {
        return $this->render('profile/index.html.twig', [
            'controller_name' => 'ProfileController',
            'profile' => $profileRepository->findAll(),
        ]);
    }
}
