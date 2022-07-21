<?php
// Create database connection
$db = mysqli_connect("localhost", "root", "", "sell");

// Initialize message variable
  $msg = "";




// If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
    $category= "fashion ";
  	$ad_title = mysqli_real_escape_string($db, $_POST['ad_title']);
  	$price = mysqli_real_escape_string($db, $_POST['price']);
  	$description = mysqli_real_escape_string($db, $_POST['description']);
    $contact = mysqli_real_escape_string($db, $_POST['Mnumber']);
  	// image file directory
  	$target = "images/".basename($image);



//include 'db.php';

$sql ="INSERT INTO wfashion(category, ad_title, description, price, image, contact_number)VALUES('$category','$ad_title','$description','$price', '$image', '$contact')";
// execute query
  	mysqli_query($db, $sql);
//mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}


  }
 $result = mysqli_query($db, "SELECT * FROM wfashion");
 


?>