<?php

if(isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];
    $to = "contact@way2up.am";
    $subject = 'Way2Up message';
    $headers = 'From:contact@way2up.am'. "\r\n" .
               'Reply-To:contact@way2up.am'. "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    $body = <<<EMAIL

    Hi Way2Up team!
    
    We have new request from $name.
    
    His/Her email is $email.
    
    Here is the text.
    
    $text
    
    Kind Regards
EMAIL;

    if(mail($to, $subject, $body, $headers)){
        echo true;
    }else{
        echo false;
    }
}
