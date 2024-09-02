<?php

namespace App\Controller;

use App\Repository\MaterialRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\FeedbackFormType;
use App\Entity\Feedback;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;


class MaterialController extends AbstractController
{
    #[Route('/material', name: 'app_material')]
    public function index(Request $request, EntityManagerInterface $entityManager, 
    MaterialRepository $materialRepository): Response
    {
        $feedback = new Feedback();
        $formFeed = $this->createForm(FeedbackFormType::class, $feedback);
        $formFeed->handleRequest($request);
        if ($formFeed->isSubmitted()) {
            $feedback = $formFeed->getData();
            $entityManager->persist($feedback);
            $entityManager->flush();
        }
        return $this->render('material/index.html.twig', [
            'controller_name' => 'MaterialController',
            'materials' => $materialRepository->findAll(),
            'formFeed' => $formFeed,
        ]);
    }
}
