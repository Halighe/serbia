<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use App\Form\{EmailRecoveryType, EnterCodeType, ChangePasswordType};
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[Route('/recovery')]
class RecoveryController extends AbstractController
{
    #[Route(path: '', name: 'app_recovery')]
    public function index(Request $request, EntityManagerInterface $entityManager, 
    AuthenticationUtils $authenticationUtils): Response
    {
        // $userForget = new User();
        $formGetEmail = $this->createForm(EmailRecoveryType::class);
        $formGetEmail->handleRequest($request);
        // $formEnterCode = $this->createForm(EnterCodeType::class);
        // $formEnterCode->handleRequest($request);

        if ($formGetEmail->isSubmitted()) {
            $userForget = $formGetEmail->get('username')->getData();
            // echo $userForget;
            $getEmail = $entityManager->getRepository(User::class)->findOneBy(['username' => $userForget]);
            // echo $getEmail;

            if ($getEmail)
            {
                $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                $shfl = str_shuffle($comb);
                $code = substr($shfl,0,10);

                $getEmail->setRecoveryCode($code);
                $entityManager->persist($getEmail);
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
                    $mail->addAddress($userForget);     // Add a recipient
    
                    // Content
                    $mail->CharSet = "UTF-8"; // Кодировка письма
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'Восстановление пароля';
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
                <p class="list_text" style="text-align: left;">Вы получили это письмо, так как забыли пароль от вашего аккаунта.</b></p>
                </div>
                <div class="list_p" style="background-color: #ffffff;">
                    <p class="list_text">Для восстановления доступа в личный кабинет, введите код </p>
                <ul class="list">
                    <li> '.$code.'</li>

                </ul>
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
                    
                    return $this->redirectToRoute('app_enter_code', ['email' => $userForget]);
                
                } catch (Exception $e) {
                    echo "Невозможно отправить. Ошибка: {$mail->ErrorInfo}";
                }            
            }            
        }
        
    return $this->render('recovery/index.html.twig', [
            'controller_name' => 'RecoveryController',
            // 'last_username' => $lastUsername,
            // 'error' => $error,
            'formGetEmail' => $formGetEmail,
        ]);
    }

    #[Route('/{email}', name: 'app_enter_code')]
    public function recovery(EntityManagerInterface $entityManager, Request $request, string $email): Response
    {
        $formEnterCode = $this->createForm(EnterCodeType::class);
        $formEnterCode->handleRequest($request);
        if ($formEnterCode->isSubmitted()) {
                $getEmail = $entityManager->getRepository(User::class)->findOneBy(['username' => $email]);
                echo $getEmail->getRecoveryCode();
                $user_code = $formEnterCode->get('code')->getData();
                echo $user_code;
                if ($user_code == $getEmail->getRecoveryCode()) {
                    return $this->redirectToRoute('app_enter_password', ['email' => $email]);
                
                    
                        }
                        else echo "Введен неверный код";
                    }
                    
                        // echo $getEmail;

        return $this->render('recovery/enter_code.html.twig', [
            'controller_name' => 'RecoveryController',
            'email' => $email,
            'formEnterCode' => $formEnterCode,
        ]);
    }
    #[Route('/password/{email}', name: 'app_enter_password')]
    public function password(UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, Request $request, string $email): Response
    {
        // echo $email;
        $formEnterPassword = $this->createForm(ChangePasswordType::class);
        $formEnterPassword->handleRequest($request);
        // echo "пришло сюда 1";
        if ($formEnterPassword->isSubmitted()) {
            $getEmail = $entityManager->getRepository(User::class)->findOneBy(['username' => $email]);
            echo $getEmail->getRecoveryCode();
            // $getEmail = $entityManager->getRepository(User::class)->findOneBy(['username' => $email]);           
                if($formEnterPassword->get('newpass')->getData() == $formEnterPassword->get('repnewpass')->getData()) 
                {                
                    $getEmail->setPassword(
                        $userPasswordHasher->hashPassword(
                            $getEmail,
                            $formEnterPassword->get('newpass')->getData()
                        )
                    );
                    $entityManager->persist($getEmail);
                    $entityManager->flush();
                    echo "Введенные пароли совпадают"; 

                    return $this->redirectToRoute('app_login');                
                }     
                else echo "Введенные пароли не совпадают";           
        }
        return $this->render('recovery/change_password.html.twig', [
            'controller_name' => 'RecoveryController',
            'formEnterPassword' => $formEnterPassword,
        ]);
    }
}
