<?php 
   //index bata eta aaucha
   $username = $_POST['username'];
   $password = $_POST['pw'];
   
   
   include 'db.php';
   
   $s = " select * from signup where username = '$username' && password = '$password'";
   
   $result = mysqli_query($conn, $s); 
   $num = mysqli_num_rows($result);
   
   if ($num == 1){
      session_start();
      $_SESSION['username'] = $username;
      header('Location: signsignup.php');
   }
   
   else{
       $_SESSION['alert'] = "LOGIN FAILED!! TRY AGAIN!!!";
        header('Location:loginfailed.php');
   }
   
  
?>