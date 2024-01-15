<?php

session_start();
if($_SESSION['login'] !== 'fmrc888fmrc' || $_SESSION['pass'] !== "fmrc123..fmrc123"){
    header("Location: ../index.php");
 

}
