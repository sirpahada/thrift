<?php 
session_start();
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>

<link rel="stylesheet" type ="text/css" href="furniture1.css">
<link rel="stylesheet" type ="text/css" href="home.css">
</head>
<body>
  <!--for navigation-->
    <ul>

      <li><a>Categories</a>
        <ul> <!--for dropdown under categories-->
          <li>Furnishing 
            <ul> <!--for dropdown under furnishing-->
              <br>
              <li><a href="furniture1.php">Furniture</a></li>
              <br>
              <li><a href="#">Curtains,Carpets</a></li>
              <br>
              <li><a href="#">Kitchen supplies</a></li>
              <br>
              <li><a href="#"> tools</a></li>
            </ul>
          </li>
          <li>Fashion
            <ul>
              <li><a href="wclothinprocess.php">Women's Clothing</a></li>
              <li><a href="#">Women's Accessories</a></li>
              <li><a href="#">Men's Clothing</a></li>
              <li><a href="#">Men's Accessories</a></li>
            </ul>
          </li>
          <li>Education
            <ul>
              <li><a href="#">Course Books,Notes</a></li>
              <li><a href="#">Engineering</a></li>
              <li><a href="#">Medical</a></li>
              <li><a href="#">Stationery</a></li>
              <li><a href="#">Others</a></li>
            </ul>
          </li>
             <li>Electronics
              <ul>
             <li><a href="#">Heaters</a></li>
              <li><a href="#">Induction cooker</a></li>
              <li><a href="#">Fan</a></li>
              <li><a href="#">Computer and parts</a></li>
              </ul>
             </li>
              <li><a href="#">Others</a>
            </li>
          </ul><!--dropdown ends-->
        </li>
      <li><a href="welcome.php">Home</a></li>
      <li><a href="sell.php">Sell</a></li>
      <li><a>Help</a></li>
    </ul>
    <box>
      <ul>
        <li><?php echo $email;?>
            <ul>
              <li><a href="account.php">Account</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        
    </box>
        <br><br><br><br><br>
    
    <div class="search">
      <input type="text" placeholder="What Are You Looking For?" id="search" name="Search">
      <input type="submit" value="GO">
    </div><hr>
    <br>
    <h1><center>Popular ADs</center></h2>
    <br>
    <hr>
<!--uploading files-->
<div id="content">
  <?php
    include 'furnituredb.php';
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
        echo "<p>TITLE:".$row['ad_title']."</p>";
        echo "<p>PRICE:".$row['price']."</p>";
        echo "<p>Contact No.:".$row['contact_number']."</p>";
        echo "<p>DESCRIPTION:".$row['description']."</p>";
      	
      echo "</div>";
    }
  ?>
  <!--<form method="POST" action="furniture1.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  </form>-->
</div>
</body>
</html>