<?php

require_once '../config/connect.php';

$news_id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `news` WHERE `news`.`id` = '$news_id'");

header("Location: ../news-list.php");