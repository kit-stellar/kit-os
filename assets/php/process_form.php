<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'kurtarguelles05@gmail.com';
$subject = 'Message from your website';
$message = "Name: $name\nEmail: $email\nMessage: $message";
$headers = "From: $email";

mail($to, $subject, $message, $headers);
header("Location: ./index.html");
exit();
?>