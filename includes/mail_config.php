<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

function sendMail($to, $body, $subject)
{
    // ? Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        // ? Server settings


        $mail->isSMTP();
        // ?Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'makindeisaiah2002@gmail.com';                     //SMTP username   'noreply@middlemanbet.com'
        $mail->Password   = 'ukokztocvxpdnpvc';                               //SMTP password  'e2n1tFfZYC'
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port       = 587;


        // ? Recipients
        $mail->setFrom('makindeisaiah2002@gmail.com', 'Isaiah');
        $mail->addAddress($to);     //Add a recipient


        // ? Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;

        return $mail->send();

        // echo 'Message has been sent';
    } catch (Exception $e) {
        //  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        //  die;
        return false;
    }
}
