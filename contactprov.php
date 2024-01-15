<?php

$to = "info@fmrc.ge";
$from = $_POST['email'];
$phone = $_POST['phone'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$subject = "Contact";
$txt= htmlspecialchars($_POST['message']);
$txt = urldecode($txt);
$txt = trim($txt);


$message =$txt."\r\n" .
"Name: $name". "\r\n" .
"Surname: $surname". "\r\n" .
"phone: $phone". "\r\n" .
"Reply to: $from";

   if(mail($to, $subject, $message)){
    header('Location: contact.php');
    }else{
        echo 'message was not sended';
    }

?>