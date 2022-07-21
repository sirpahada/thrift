<?php
require_once('connection.php');
$fname = $lname = $phone = $email = $password = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO type (Firstname,Lastname,Phone,Email,Password) VALUES ('$fname','$lname','$phone','$email','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: registration.php");
}
else
{
	echo "Error :".$sql;
}
?>