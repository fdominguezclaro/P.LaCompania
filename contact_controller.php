<?php
require("sendgrid-php/sendgrid-php.php");

$from = new SendGrid\Email(null, getenv('SENDGRID_USER'));
$subject="PLC, from $_POST['email']";
$to = new SendGrid\Email(null, "fdominguezc@uc.cl");
$content = new SendGrid\Content("text/plain", $_POST["message"]);
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('SENDGRID_PASS');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();

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
