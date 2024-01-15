<?php
$connect = mysqli_connect('localhost', 'fmrcinfo_sailors', 'sailors','fmrcinfo_sailorss');

if(!$connect){
    die('something went wrong');
}