<?php
$to = 'freefreelancer@gmail.com';

$subject = 'KINGDOM STUDY Message';

$headers  = "From: " . strip_tags($_POST['req-email']) . "\r\n";
$headers .= "Reply-To: " . strip_tags($_POST['req-email']) . "\r\n";
$headers .= "CC: freefreelanceruzb@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$text = $_POST['text'];
$email = $_POST['email'];
$message = $_POST['message'];

mail($to, $subject, $text, $email, $message, $headers);

if(mail($to, $subject, $text, $email, $message, $headers)){ 
   echo 'Email has sent successfully.'; 
}else{ 
   echo 'Email sending failed.';
?>
