<?php

require_once '../config/connect.php';

$title = $_POST['title'];
$text = $_POST['text'];
mysqli_query($connect, "INSERT INTO `services` (`id`, `title`, `text`) VALUES (NULL, '$title', '$text')");
header('Location: ../services-list.php');
