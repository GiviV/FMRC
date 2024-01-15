<?php

require_once '../config/connect.php';

$title = $_POST['title'];
$date = $_POST['date'];
$text = $_POST['text'];
$img = $_FILES['img']['name'];
mysqli_query($connect, "INSERT INTO `corporate` (`id`, `title`, `date`,`text`,`img`) VALUES (NULL, '$title', '$date', '$text','$img')");
$nameImg = $_FILES['img']['name'];
$tmpNameImg = $_FILES['img']['tmp_name'];
move_uploaded_file($tmpNameImg, "../../imgs/" . $nameImg);
header('Location: ../corporate-list.php');
