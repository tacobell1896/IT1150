<?php
$first = $POST['first_name'];
$last = $POST['last_name'];
$email = $POST['email'];
$message = $POST['message'];
$formcontent = "From: $first \n Message: $message";
$recipient = "tbell.swd@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
$mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank you for submitting!";


?>
