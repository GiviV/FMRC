<?php

require_once '../config/connect.php';

$question = $_POST['question'];
$answer = $_POST['answer'];
mysqli_query($connect, "INSERT INTO `centers` (`id`, `question`, `answer`) VALUES (NULL, '$question','$answer')");
// $nameImg = $_FILES['img']['name'];
// $tmpNameImg = $_FILES['img']['tmp_name'];
// move_uploaded_file($tmpNameImg, "../../imgs/" . $nameImg);
header('Location: ../centers-list.php');
