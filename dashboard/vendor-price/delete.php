<?php

require_once '../config/connect.php';

$prices_id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `prices` WHERE `prices`.`id` = '$prices_id'");

header("Location: ../prices-list.php");