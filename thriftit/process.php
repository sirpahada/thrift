<?php
	require_once('connection.php');
    //Get values pass from form in registration.php file
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	//connect to the server and select database
	$conn = mysqli_connect("localhost","root","","reg");
	$sql = "SELECT * FROM type WHERE Email='$email' AND Password='$password'";



$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
  { 
  	while ($row = mysqli_fetch_assoc($result))
  	{
  	  $id = $row["ID"];
		$email = $row["Email"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
    }
   header("Location: sell.php");
   }
else
{
	echo "Invalid email or password";
}


?>
