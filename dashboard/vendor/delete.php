<?php

require_once '../config/connect.php';

$doctors_id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `doctors` WHERE `doctors`.`id` = '$doctors_id'");

header("Location: ../doctors-list.php");