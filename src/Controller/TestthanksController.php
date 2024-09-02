<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestthanksController extends AbstractController
{
    #[Route('/testthanks', name: 'app_testthanks')]
    public function index(): Response
    {
        return $this->render('testthanks/index.html.twig', [
            'controller_name' => 'TestthanksController',
        ]);
    }
}
