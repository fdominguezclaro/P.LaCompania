<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$recipient = "fdominguezc@uc.cl";
$subject="PLC, from $email";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $message, $mailheader);
echo "<script type='text/javascript'>alert('Mensaje enviado!');</script>";
header('Location: index.html');


if(isset($_POST['submit']))
   {


   $sendgrid = new SendGrid('app98066099@heroku.com', 'mm4x15xr2217');

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
}



?>
