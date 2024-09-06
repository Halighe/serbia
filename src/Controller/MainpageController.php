<?php

namespace App\Controller;

use App\Form\{ParticipantType, FeedbackFormType};
use App\Entity\{Participant, User, Feedback};
use App\Repository\ReviewRepository;
use App\Repository\PartnersRepository;
use App\Repository\ProgramRepository;
use App\Repository\BroadcastRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class MainpageController extends AbstractController
{
    #[Route('/', name: 'app_mainpage')]
    public function index(ReviewRepository $reviewRepository, PartnersRepository $partnersRepository, 
    ProgramRepository $programsRepository, BroadcastRepository $broadcastsRepository, Request $request,
    EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $participant = new Participant();
        $form = $this->createForm(ParticipantType::class, $participant);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
        //  && $form->isValid()
            $participant = $form->getData();           
            $entityManager->persist($participant);
            $entityManager->flush();

            $recipient = $participant->getEmail();
            // echo $recipient;
            $newuser = new User();
            $newuser->setUsername($recipient);            
            $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            $shfl = str_shuffle($comb);
            $plainPassword=substr($shfl,0,8);
            $hashedPassword = $passwordHasher->hashPassword(
                $newuser,
                $plainPassword
            );
            $newuser->setPassword($hashedPassword);            
            $newuser->setRoles(["ROLE_USER"]);
            $entityManager->persist($newuser);
            $entityManager->flush();

            $repository = $entityManager->getRepository(User::class);
            $getUser = $repository->findOneBy(['username' => $recipient]);
            $participant->setUser($getUser);
            $entityManager->persist($participant);
            $entityManager->flush();
            
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
                $mail->addAddress($recipient);     // Add a recipient

                // Content
                $mail->CharSet = "UTF-8"; // Кодировка письма
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Добро пожаловать в новую реальность!';
                $mail->Body    = '
                <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: auto;
            background-color: #000;
            color: #fff;
        }
        .banner {
            padding: 20px;
            text-align: center;
            border: 4px solid;
        margin-left: 3.5%;
        margin-right: 3.5%;
        margin-top: 0%;
        padding-top: 13px;
        background-image: url(https://i.ibb.co/1LSBL0x/91d9677d9980176726ca12b01daada97-1.jpg);
        background-size: cover;
        background-repeat: no-repeat;
            border-radius: 6px;
        }
        .banner img {
            width: 100%;
            max-width: 200px;
        }
        .content {
            padding: 20px;
        }
        .content h1 {
            color: #fff;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .content p {
            color: #fff;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .list {
            background-color: #9C27B0;
            padding: 20px;
            border-radius: 8px;
            list-style-type: none;
        }
        .list_p{
        padding: 20px;
        border-radius: 6px;
        
        }
        .list a {
            display: block;
            color: #fff;
            text-decoration: none;
            margin-bottom: 10px;
        }
        .list a:hover {
            text-decoration: underline;
        }
        .footer {
            background-color: #9C27B0;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            border-radius: 6px;
            margin-left: 3.5%;
            margin-right: 3.5%;
        }
        .results{
        background-color: orange;
        border-radius: 6px;
        padding: 28px;
        margin-bottom: 20px;
        }
        .xds{
            margin-left: 20px;
        }
        .top_mob{
            display: none;
        }
        .robot_pc{
            padding-left: 271px;
        }
        .list_text{
            color: black !important;
        }
        .lk_btn{
            height: 22px;
    background-color: rgba(255, 170, 0, 1);
    align-items: center;
    justify-content: center;
    display: flex;
    padding: 24px;
    border-radius: 6px;
        }
        @media (max-width: 600px) {
            .email-container {
                width: 100% !important;
            }
            .top_pc{
                display: none;
            }
            .top_mob{
                display: initial;
            }
            .robot_pc{
                padding-left: 100px;
            }
            .banner{
                margin-left: 4.5%;
                margin-right: 4.5%;
                height: 200px;
            }
            .footer{margin-left: 4.5%;
                margin-right: 4.5%;
            }
            .xds{
                width: 92%;
            }
            }
            @media (max-width: 600px){
    .xds{
                width: 88%;
            }
            .gif{
                width: 89%;
            }
}
    </style>
</head>
<body>
    <div class="email-container" style="padding-top:20px; padding-bottom: 20px;">
        <img class="xds" src="https://i.ibb.co/5cZcRJc/banner-1.png" alt="">
        <div class="content">
            <div class="results">
            <p class="list_text" style="text-align: left;">Благодарим за регистрацию на мероприятие «Дни робототехники и инновационных образовательных технологий».</p>
            <p class="list_text"><b>Мы рады, что Вы с нами! 🔥</b></p>
            </div>
            <div class="list_p" style="background-color: #ffffff;">
                <p class="list_text">Для доступа в личный кабинет пройдите авторизацию/введите логин и пароль.</p>
            <ul class="list">
                <li>Ваш логин: '.$recipient.'</li>
                <li>Ваш пароль: '.$plainPassword.'</li>
            </ul>
        </div>
        <div class="list_p" style="background-color: #ffffff; margin-top: 20px;">
            <p class="list_text">🎁 Дарим вам уникальные обои на телефон с тематикой мероприятия.
             Скачивайте и устанавливайте их на свой экран, чтобы погрузиться в мир технического творчества и инноваций прямо с вашего устройства.</p>
                <a href="#"><img src="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExZTNkMXl4dXFmZ25lN2UyNWZlOXczdTVkdWl1bnRxeW5maDE2cXJjZiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9cw/1EIkixZbH59Wr6wGsz/giphy.gif" class="gif" alt=""></a>

        </div>
        <div class="list_p" style="background-color: #ffffff; margin-top: 20px;">
            <p class="list_text">Напоминаем, что с подробной информацией о расписании мероприятия вы можете ознакомиться в своём личном кабинете. 👇</p>
           <div class="lk_btn">
                 <a href="https://vr-rs.isp.sprint.1t.ru/profile" style="text-decoration: none; color: black;">Перейти в личный кабинет</a>
            </div>

        </div>
        </div>
        <div class="footer">
            ООО "ООО "Содружество"<br>
            Тел.: +7 (495) 105-16-08<br>
            vopros@ooo.ru
        </div>
    </div>
</body>
</html>
';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                // echo 'Message has been sent';
                return $this->redirectToRoute('app_thanks');
            } catch (Exception $e) {
                echo "Невозможно отправить. Ошибка: {$mail->ErrorInfo}";
            }            
        }

        $feedback = new Feedback();
        $formFeed = $this->createForm(FeedbackFormType::class, $feedback);
        $formFeed->handleRequest($request);
        if ($formFeed->isSubmitted()) {
            $feedback = $formFeed->getData();
            $entityManager->persist($feedback);
            $entityManager->flush();

            return $this->render('fbthanks/index.html.twig', [
                'controller_name' => 'FbthanksController',
            ]);
        }

        return $this->render('mainpage/index.html.twig', [
            'controller_name' => 'MainpageController',
            'reviews' => $reviewRepository->findAll(),
            'partners' => $partnersRepository->findAll(),
            'programs' => $programsRepository->findAll(),
            'broadcasts' => $broadcastsRepository->findAll(),
            'form' => $form,
            'formFeed' => $formFeed,
        ]);
    }      
    
}
