<?php

require_once '../config/connect.php';


$question = $_POST['question'];
$answer = $_POST['answer'];
$id = $_POST['id'];

mysqli_query($connect, "UPDATE `centers` SET `question` = '$question', `answer` = '$answer' WHERE `centers`.`id` = '$id' ");
header('Location: ../centers-list.php');
