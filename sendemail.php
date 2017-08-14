<?php

$name = @trim(stripslashes($_POST['name'])); 

$email = @trim(stripslashes($_POST['email'])); 

$subject = "Contato pelo site de: ". $name; 

$message = @trim(stripslashes($_POST['message'])); 

$email_from = $email;

$email_to = 'contato@microvil.com.br';

$body = 'Nome: ' . $name . "\n\n" . 'E-mail: ' . $email . "\n\n" . 'Mensagem: ' . $message;

$success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

die;