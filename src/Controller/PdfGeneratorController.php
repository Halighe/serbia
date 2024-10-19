<?php

namespace App\Controller;

use App\Entity\Participant;
use App\Repository\TextRecommendationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ParticipantRepository;
use Doctrine\ORM\EntityManagerInterface;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Symfony\Component\HttpFoundation\Cookie; 
use App\Entity\TextRecommendation;
use Dompdf\Dompdf;
class PdfGeneratorController extends AbstractController
{
    #[Route('/test/thanks', name: 'app_pdf_generator')]
    public function index(EntityManagerInterface $entityManager, ParticipantRepository $participantRepository,
    Request $request, TextRecommendationRepository $recommendationRepository): Response
    {
        $tmp = $request->cookies->get('result');
        $email = $request->cookies->get('email');
        $email = substr($email, 1, -1);
        // $email = 'haligh@rambler.ru';
        $name = $request->cookies->get('name');
        // $name = 'Galina Borovkova';
        $results = json_decode($tmp,true);

        $request = "SELECT t FROM App\Entity\TextRecommendation t WHERE t.number IN (";
        // $c=count($results);

        foreach ($results as $key => $val)
        {
            // if ($results[$i])
            // {
                $request = $request . $val . ', ';
            // }
        }
        $request = substr($request, 0, -2);
        $request = $request . ')';
        $query = $entityManager->createQuery($request);
        $finalRecoms = $query->getResult();
        $recs="";
        foreach ($finalRecoms as $finalRecom)
        {
            $recs = $recs . $finalRecom->getTextrec() . "<br>";
        }
        // $recs = implode($finalRecom->getTextrec());
        $data = [
            'name'         => $name,
            'email'        => $email,
            'recomendation' => $recs
        ];
        $html =  $this->renderView('pdf_generator/index.html.twig', $data);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        
        $dompdf->render();
        $output = $dompdf->output();
        $extension = "pdf";
        $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $shfl = str_shuffle($comb);
        $plainName=substr($shfl,0,8);
        // $filename = getRandomFileName("/pdf", $extension);
        file_put_contents("uploads/recoms/".$plainName.".pdf", $output);

        // $getParticipant = new Participant();
        // $repository = $entityManager->getRepository(Participant::class);
        $newParticipant = $participantRepository->findOneBy(['email' => $email]);
        // echo $newParticipant;
        if ($newParticipant) {
        // $fileName = $plainName.".pdf";
        $newParticipant->setRecommendation($plainName.".pdf");
        $entityManager->persist($newParticipant);
        $entityManager->flush();
        }
        // else echo 'Такого участника не существует.';

        $mail = new PHPMailer(true);
        try {
            // Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'mail.concord.ac';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication

            $mail->Username   = 'vr-kz@concord.ac';                     // SMTP username
            $mail->Password   = 'o5YT2bJ3nCq0Nsh';                               // SMTP password
            $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 465;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('vr-kz@concord.ac', 'VR-AR');
            $mail->addAddress($email);     // Add a recipient

            $mail->addAttachment("uploads/recoms/".$plainName.".pdf");
            // Content
            $mail->CharSet = "UTF-8"; // Кодировка письма
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Добро пожаловать в новую реальность!';
            $mail->Body    = '<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">

        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>VR-AR</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
        </head>

        <body>
        <div>
            Добро пожаловать в дополненную реальность!
        </div>
        <div>
            Спасибо, что прошли тест.
        </div>
        <div>
            Результаты во вложении
        </div>
        </body>

        </html>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            // echo 'Message has been sent';
            // return $this->render('testthanks/index.html.twig', [
            //     'controller_name' => 'TestthanksController',
            // ]);
        } catch (Exception $e) {
            echo "Невозможно отправить. Ошибка: {$mail->ErrorInfo}";
        }       
        
        return $this->render('testthanks/index.html.twig', [
            'controller_name' => 'TestthanksController',
        ]);
    }
}
