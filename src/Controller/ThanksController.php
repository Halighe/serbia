<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ThanksController extends AbstractController
{
    #[Route('/thanks', name: 'app_thanks')]
    public function index(): Response
    {
        return $this->render('thanks/index.html.twig', [
            'controller_name' => 'ThanksController',
        ]);
    }
}
