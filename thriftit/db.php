<?php 
session_start();
$host ="localhost";
$user ="root";
$pass = "";
$dbname ="sell";


$conn = mysqli_connect($host, $user, $pass, $dbname) or die();
?>