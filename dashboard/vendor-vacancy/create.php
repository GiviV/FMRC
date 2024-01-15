<?php

require_once '../config/connect.php';

$title = $_POST['title'];
$func = $_POST['func'];
$req = $_POST['req'];
$pres = $_POST['pres'];
mysqli_query($connect, "INSERT INTO `vacancy` (`id`, `name`, `functions`,`requirements`,`personal`) VALUES (NULL, '$title', '$func', '$req','$pres')");
header('Location: ../vacancy-list.php');
