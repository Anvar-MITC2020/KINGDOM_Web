<?php 
    $text = $_POST['text'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent="From: $text \n Message: $message";
    $to = 'freefreelancer@gmail.com';
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    $send_message=mail($to, $subject, $formcontent, $mailheader);

    if($send_message){
        echo "Email has sent successfully" 
    } else {
        echo "Email sending failed";
    }
?>


