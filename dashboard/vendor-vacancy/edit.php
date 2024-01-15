<?php

require_once '../config/connect.php';

$title = $_POST['title'];
$func = $_POST['func'];
$req = $_POST['req'];
$pres = $_POST['pres'];
$id = $_POST['id'];

mysqli_query($connect, "UPDATE `vacancy` SET `name` = '$title', `functions` = '$func', `requirements` = '$req', `personal` = '$pres'  WHERE `vacancy`.`id` = '$id' ");
header('Location: ../vacancy-list.php');