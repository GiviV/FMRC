<?php

require_once '../config/connect.php';

$vacancy_id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `vacancy` WHERE `vacancy`.`id` = '$vacancy_id'");

header("Location: ../vacancy-list.php");