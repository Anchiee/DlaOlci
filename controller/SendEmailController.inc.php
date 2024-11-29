<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "../model/PHPMailer/src/PHPMailer.php";
require "../model/PHPMailer/src/Exception.php";
require "../model/PHPMailer/src/SMTP.php";




function sendEmail($email)
{


  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->isHTML(true);
  $mail->SMTPAuth = true;
  $mail->Host = "smtp.gmail.com";
  $mail->Username = "kochamciieolcia@gmail.com";
  $mail->Password = "fxmf lbee mwwy cyaz";
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->port = 587;

  $mail->setFrom("kochamciieolcia@gmail.com");
  $mail->addAddress($email);

  $mail->Subject = "Dla mojej kochanej";

  $mail->addEmbeddedImage("../model/assets/cat-rose.png", "cat-rose-cid");


  $bodyMessage = '<div style="background-color:#9C1C6B;
  font-family:"Courier New", Courier, monospace;">
    
    <h1 style="color:#FFE9E8;">Cześć, Skarbie</h1>
    <p style="color:#FFE9E8; font-size: 18px;">
      Chciałbym Ci tylko powiedzieć, że bardzo się cieszę, że Cię mam w swoim życiu i jestem bardzo, bardzo wdzięczny, 
      że mam zaszczyt być Twoim chłopakiem. Będę się starać jak najbardziej, abyś czuła się komfortowo, bezpiecznie oraz 
      przede wszystkim szczęśliwie. Jak już wiesz, nie jestem tacy jak inni chłopacy, którzy będą patrzeć na ciebie, jakbyś była jakąś rzeczą.
      Twoje uczucia są dla mnie najważniejsze oraz nie miałbym serca, aby zranić taką super, cudowną, niesamowitą oraz piękną dziewczynke jak ty.
    </p>

    <h2 style="color:#FFE9E8; font-size:25px; border-bottom: 1px solid #7a1754; padding-bottom: 3px;">Kocham cię</h2>

    <img src="cid:cat-rose-cid" alt="kot z roza">

  </div>';

  
  $mail->Body = $bodyMessage;
  $mail->send();

}



