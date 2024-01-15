
<?php

$to = "georgedion00@gmail.com";
$from = $_POST['email'];
$phone = $_POST['phone'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$date = $_POST['date'];
$time = $_POST['time'];
$subject = "Appointmet";
$txt= htmlspecialchars($_POST['message']);
$txt = urldecode($txt);
$txt = trim($txt);


$message = $txt. "\r\n" .
"Name: $name". "\r\n" .
"Surname: $surname". "\r\n" .
"phone: $phone". "\r\n" .
"date: $date". "\r\n" .
"time: $time". "\r\n" .
"Reply to: $from". "\r\n";

    if(mail($to, $subject, $message)){
        // echo 'succes';
   
      header('Location: appointment.php');
    }
?>