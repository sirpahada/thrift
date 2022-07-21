<?php 
session_start();

?>
<HTML>
 <!-- logindb bata fail bho vane eta aaune -->
	<HEAD>

		<TITLE>THRIFT SHOP</TITLE>

		<link rel="stylesheet" type ="text/css" href="home.css">

	</HEAD>

	<BODY>
	<div class="logo">
		<center><h1>THRIFT IT </h1></center>
         </div>
       
        <!--for navigation-->
        
		<ul>
			<li><a>Categories</a>
				<ul> <!--for dropdown under categories-->
					<li>Furnishing
						<ul> <!--for dropdown under furnishing-->
						 <li><a href="#">Furniture</a></li>
                         <li><a href="#">Curtains,Carpets</a></li>
                         <li><a href="#">Kitchen supplies</a></li>
                         <li><a href="#"> tools</a></li>
						</ul>
					</li>
					<li>Fashion
						<ul>
							<li><a href="#">Women's Clothing</a></li>
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
			 
			<li><a href="./contact+help.php">Help</a></li>
		</ul>
        <p><?php 
        echo $_SESSION['alert'];
        ?></p>
        <style> p{
            float: left;
            
        }</style>
		<form action="logindb.php" method="post">
             <box>
			<label>Username:</label>
			<input type="text" id="username" name="username" required>
			<label>Password:</label>
			<input type="password" id="password" name="pw" required>
			<input type="submit" id="signin" value="Sign In"><br>
			<center><i>Don't have an account?</i> <a href="loginandregis.html">Sign Up here</a></center>
		</box></form><br><br><br><br><br>
		
		<div class="search">
			<input type="text" placeholder="What Are You Looking For?" id="search" name="Search">
			<input type="submit" value="GO">
		</div><hr>
		<h1><center>Popular ADs</center></h2><hr>
		
		<?php include 'itemShow.php'; ?>
		<hr>
	 
	  
	  
	 
	 
				
	</BODY>

</HTML>