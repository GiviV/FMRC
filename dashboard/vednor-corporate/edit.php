<?php

require_once '../config/connect.php';

$title = $_POST['title'];
$text = $_POST['text'];
$date = $_POST['date'];
$id = $_POST['id'];
$img = $_FILES['img']['name'];
$nameImg = $_FILES['img']['name'];
$tmpNameImg = $_FILES['img']['tmp_name'];
move_uploaded_file($tmpNameImg, "../../imgs/" . $nameImg);
mysqli_query($connect, "UPDATE `corporate` SET `title` = '$title', `text` = '$text', `img` = '$img', `date` = '$date' WHERE `corporate`.`id` = '$id' ");
header('Location: ../corporate-list.php');