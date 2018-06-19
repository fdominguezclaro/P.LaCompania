<?php

echo "<script type='text/javascript'>alert('Mensaje enviado!');</script>";
header('Location: index.html');
?>

<!--
php
require 'vendor/autoload.php';

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$recipient = "fdominguezc@uc.cl";
$subject="PLC, from $email";
$mailheader = "From: $email \r\n";

$sendgrid = new SendGrid(getenv('SENDGRID_USER'), getenv('SENDGRID_PASS'));
$mail = new SendGrid\Mail();
  $mail->
    addTo($recipient)->
    setFrom('app98066099@heroku.com')->
    setSubject($subject)->
    setText($message)->
    setHtml($mailheader);

$sendgrid->
  smtp->
    send($mail);

echo "<script type='text/javascript'>alert('Mensaje enviado!');</script>";
header('Location: index.html');

-->
