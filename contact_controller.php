<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$recipient = "fdominguezc@uc.cl";
$subject="Message sent using your contact form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $message, $mailheader);
echo "<script type='text/javascript'>alert('Mensaje enviado!');</script>";
header('Location: index.html');

?>
