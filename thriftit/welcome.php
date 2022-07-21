<?php 
session_start();
$email = $_SESSION['email'];
?>
<HTML>

	<HEAD>

		<TITLE>THRIFT-IT</TITLE>

		<link rel="stylesheet" type ="text/css" href="home.css">

	</HEAD>

	<BODY>
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
		<!--for pictures of goods-->
		<br>
			<br>
			<br>
		<div class="container">

			 <div class="box">
				 <div class="imgBox">
					 <img src="drafter.jpg">
				 </div>
				 <div class="details">
					 <div class="content">
				   <h2>Drafter</h2>
				   <p>Price:Rs 200<br>
					  Used for engineering drawing
				   </p></div>
				 </div>
				 <div class="buy">
					<input type="submit" value="Buy"> 
				 </div>
			</div>

             <div class="box">
				<div class="imgBox">
					<img src="guitar.jfif">
				</div>
				<div class="details">
					<div class="content">
				  <h2>Guitar</h2>
				  <p>Price:Rs 1000<br>
					 Brand New
				  </p></div>
				</div>
				<div class="buy">
					<input type="submit" value="Buy"> 
				 </div>
			 </div>

			 <div class="box">
				<div class="imgBox">
					<img src="hoodie.jfif">
				</div>
				<div class="details">
					<div class="content">
				  <h2>Red Hoodie</h2>
				  <p>Price:Rs 450<br>
					 Size:Large
					 Condition:Used
				  </p></div>
				</div>
				<div class="buy">
					<input type="submit" value="Buy"> 
				 </div>
			 </div>

			 <div class="box">
				<div class="imgBox">
					<img src="labcoat.jpg">
				</div>
				<div class="details">
					<div class="content">
				  <h2>Lab Coat</h2>
				  <p>Price:Rs 200<br>
					 Used for workshop
				  </p>
				</div>
				</div>
				<div class="buy">
					<input type="submit" value="Buy"> 
				 </div>
			 </div>

			 <div class="box">
				<div class="imgBox">
					<img src="heater.jpeg">
				</div>
				<div class="details">
					<div class="content">
				  <h2>Electric Heater</h2>
				  <p>Price:Rs 1500<br>
					 Condition:Excellent
					 No Waranty 
				  </p></div>
				</div>
				<div class="buy">
					<input type="submit" value="Buy"> 
				 </div>
			 </div>

			 <div class="box">
				<div class="imgBox">
					<img src="wallet.jfif">
				</div>
				<div class="details">
					<div class="content">
				  <h2>Men's Wallet</h2>
				  <p>Price:Rs 400<br>
					 Condition:Used
				  </p></div>
				</div>
				<div class="buy">
					<input type="submit" value="Buy"> 
				 </div>
			 </div>

			 <div class="box">
				<div class="imgBox">
					<img src="studytable.jfif">
				</div>
				<div class="details">
					<div class="content">
				  <h2>Study Table</h2>
				  <p>Price:Rs 1200<br>
					 Condition:Like New
				  </p></div>
				</div>
				<div class="buy">
					<input type="submit" value="Buy"> 
				 </div>
			 </div>

			 <div class="box">
				<div class="imgBox">
					<img src="phy.jfif">
				</div>
				<div class="details">
					<div class="content">
				  <h2>Phy 102 Book</h2>
				  <p>Price:Rs 200<br>
				  </p></div>
				</div>
				<div class="buy">
					<input type="submit" value="Buy"> 
				 </div>
			 </div>
			 
		</div><br>
		<hr>
	  <h1><center>Trending Ads</center></h1>
	  
	 
	 
				
	</BODY>

</HTML>