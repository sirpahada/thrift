<?php 
session_start();
?>

<HTML><!-- logindb bata eta aucha signin garechi and ad post garechi ni eta aaucha furnituredb bata -->

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
			<li><a href="sell.php">Sell</a></li> 
			<li><a href="./contact+help.php">Help</a></li>
		</ul>
         <!-- username display -->
		 <div class="abc">
		<form action="index.php" method="post">
        <?php echo $_SESSION['username'];
          ?>
            <input type="submit" value=" log out">
        </form></div>
        <style> 
        .abc{
            float : right;
        }
        </style>
		<div class="search">
		<form action="searchresultlogin.php" method="post">
			<input type="text" placeholder="What Are You Looking For?" id="search" name="search">
			<input type="submit" value="GO">
			</form>
		</div><br>
		<hr>
		<h1><center>Popular ADs</center></h2><hr>
		
		<?php include 'itemShow.php'; ?>
		<hr>
	  
	  
	 
	 
				
	</BODY>

</HTML>