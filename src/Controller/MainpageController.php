<?php

namespace App\Controller;

use App\Repository\ReviewRepository;
use App\Repository\PartnersRepository;
use App\Repository\ProgramRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainpageController extends AbstractController
{
    #[Route('/', name: 'app_mainpage')]
    public function index(ReviewRepository $reviewRepository, PartnersRepository $partnersRepository, ProgramRepository $programsRepository): Response
    {
        return $this->render('mainpage/index.html.twig', [
            'controller_name' => 'MainpageController',
            'reviews' => $reviewRepository->findAll(),
            'partners' => $partnersRepository->findAll(),
            'programs' => $programsRepository->findAll(),
        ]);
    }
}
