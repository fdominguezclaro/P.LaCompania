<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$formcontent="From: $name \n Message: $message";
$recipient = "fdominguezc@uc.cl";
$subject="Message sent using your contact form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader);
header('Location: index.html');
echo "Mensaje enviado!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";

?>
