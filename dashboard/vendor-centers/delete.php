<?php

require_once '../config/connect.php';

$centers_id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `centers` WHERE `centers`.`id` = '$centers_id'");

header("Location: ../centers-list.php");