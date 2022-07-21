<?php 
session_start();
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Category: Furniture</title>
        <link rel="stylesheet" type="text/css" href="sell.css">
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
        <h1>Post your AD</h1>
        <div class="cat">
            <b>
                 Category:
            </b><br>
            <i>Furnishing & Appliances/ Furniture</i> <a href="sell.php">Change</a>
        </div>

        <form action="furniture1.php" method="post" enctype="multipart/form-data">
            <label>AD Title*</label><br>
             <input type="text" name="ad_title" id="title" required><br>
             <i>Mention the name and key features of your product(brand,type)</i><br><br>

            <label>Description*</label><br>
             <textarea rows="10" cols="60" name="description" required>
             </textarea><br><br>

            <label>Price in Rs*</label><br>
             <input type="number" name="price" id="price" required><br><br>

            <label>Upload Upto 1 Photo*</label><br>
             <input type="file" name="image" id="pic" required><br>
             <i>This field is mandatory</i><br><br>

            <label>Contact Number</label><br>
                <select id="ph">
                <option>+977</option>
                <OPTION>01</OPTION>
                </select>
              <input type="number" name="Mnumber" id="number" required><br><br>

            <input type="submit" value="Post Ad" name="upload" id="post">

        </form>

    </body>
</html>