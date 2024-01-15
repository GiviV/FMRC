<?php

require_once '../config/connect.php';

$corporate_id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `corporate` WHERE `corporate`.`id` = '$corporate_id'");

header("Location: ../corporate-list.php");