<?php

require_once '../config/connect.php';

$title = $_POST['title'];
$text = $_POST['text'];
$id = $_POST['id'];

mysqli_query($connect, "UPDATE `services` SET `title` = '$title', `text` = '$text' WHERE `services`.`id` = '$id' ");
header('Location: ../services-list.php');