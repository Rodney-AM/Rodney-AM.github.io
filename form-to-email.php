<?php

$to = "akangumyarodney@gmail.com";
$subject =$_POST['subject'] ;
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$headers = "From: $email" . "\r\n";

mail($to, $subject, $message, $headers);

?>
