<?php
/* Email Submission File */
$fname = $lname = $email = $message = "";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$message = $_POST["message"];

/* Email to Company */
$to = "abreezemail@gmail.com";
$headers = "From: ";

?>