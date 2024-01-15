<?php

require_once '../config/connect.php';

$name = $_POST['name'];
$position = $_POST['position'];
$about = $_POST['about'];
$experience = $_POST['experience'];
$img = $_FILES['img']['name'];
mysqli_query($connect, "INSERT INTO `doctors` (`id`, `name`, `position`, `about`, `experience`, `img`) VALUES (NULL, '$name', '$position','$about','$experience','$img')");
$nameImg = $_FILES['img']['name'];
$tmpNameImg = $_FILES['img']['tmp_name'];
move_uploaded_file($tmpNameImg, "../../imgs/doctors/" . $nameImg);
header('Location: ../doctors-list.php');

