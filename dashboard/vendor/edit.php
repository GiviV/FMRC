<?php

require_once '../config/connect.php';

$name = $_POST['name'];
$position = $_POST['position'];
$about = $_POST['about'];
$experience = $_POST['experience'];
$id = $_POST['id'];
$img = $_FILES['img']['name'];
$hid_img = $_POST['hid_img'];
$nameImg = $_FILES['img']['name'];
$tmpNameImg = $_FILES['img']['tmp_name'];
if($img === ""){
    $img = $hid_img;
}
move_uploaded_file($tmpNameImg, "../../imgs/doctors/" . $nameImg);

mysqli_query($connect, "UPDATE `doctors` SET `name` = '$name', `position` = '$position', `about` = '$about', `experience` = '$experience', `img` = '$img' WHERE `doctors`.`id` = '$id' ");
header('Location: ../doctors-list.php');