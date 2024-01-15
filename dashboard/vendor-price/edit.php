<?php

require_once '../config/connect.php';

$title = $_POST['title'];
$price = $_POST['price'];
$id = $_POST['id'];

mysqli_query($connect, "UPDATE `prices` SET `title` = '$title', `price` = '$price' WHERE `prices`.`id` = '$id' ");
header('Location: ../prices-list.php');