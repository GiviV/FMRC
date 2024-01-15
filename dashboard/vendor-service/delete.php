<?php

require_once '../config/connect.php';

$services_id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `services` WHERE `services`.`id` = '$services_id'");

header("Location: ../services-list.php");