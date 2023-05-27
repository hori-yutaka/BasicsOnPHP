<?php

require 'index.view.php';

$sent = '';
$errors = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(!empty($name)){
        $name = trim($name);
        $name = filter_var($name, FILTER_SANTIZE_STRING);
    } else {
        $errors .= 'Please input a name<br/>';
    }

    if(!empty($email)){
        $email = filter_var($email, FILTER_SANTIZE_EMAIL);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL) {
            $errors .= 'Please input a valid email<br/>';
        }
    }else {
        $errors .= 'Please input a email address<br/>';
    }

    if(!empty($message)){
        $name = htmlspecialchars($message);
        $name = trim($message);
        $name = stripslashes($message);
    } else {
        $errors .= 'Please input a message';
    }

    if(!$errors) {
        $send_to = 'yutakaohno8972@hotmail.com';
        $subject = 'Sent From PHP Form';
        $validated_message = "From: $name/n";
        $validated_message .= "Email: $email/n";
        $validated_message .= "Message: $message/n";
        mail($send_to, $subject, $validated_message);
        $sent = true;
    }
}

?>