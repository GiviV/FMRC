<?php

require_once '../config/connect.php';
$title = $_POST['title'];
$text = $_POST['text'];
$date = $_POST['date'];
$id = $_POST['id'];
$img = $_FILES['img']['name'];
$hid_img = $_POST['hid_img'];
$nameImg = $_FILES['img']['name'];
$tmpNameImg = $_FILES['img']['tmp_name'];
if($img === ""){
    $img = $hid_img;
}
move_uploaded_file($tmpNameImg, "../../imgs/" . $nameImg);
mysqli_query($connect, "UPDATE `news` SET `title` = '$title', `text` = '$text', `img` = '$img', `date` = '$date' WHERE `news`.`id` = '$id' ");
header('Location: ../news-list.php');

var_dump($img);
var_dump($hid_img);
