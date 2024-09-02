<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FbthanksController extends AbstractController
{
    #[Route('/fbthanks', name: 'app_fbthanks')]
    public function index(): Response
    {
        return $this->render('fbthanks/index.html.twig', [
            'controller_name' => 'FbthanksController',
        ]);
    }
}
