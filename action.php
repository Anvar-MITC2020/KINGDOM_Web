<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent="From: $name \n Message: $message";
    $to = 'freefreelancer@gmail.com';
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    $send_message=mail($to, $subject, $formcontent, $mailheader);

    if($send_message){
        echo "thank you"
    } else {
        echo "error";
    }
?>


