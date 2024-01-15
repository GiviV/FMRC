<?php

require_once '../config/connect.php';

$title = $_POST['title'];
$price = $_POST['price'];
mysqli_query($connect, "INSERT INTO `prices` (`id`, `title`, `prise`) VALUES (NULL, '$title', '$price')");
header('Location: ../prices-list.php');

