<?php 
session_start();
$email = $_SESSION['email'];
?>
<HTML>

    <HEAD>

        <TITLE>THRIFT-IT</TITLE>
        <link rel="stylesheet" type ="text/css" href="sell.css">

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
                            <li><a href="wclothin.php">Women's Clothing</a></li>
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
        <!--actual code for page starts-->
        <h2>Choose the category of your product:</h2>
        <table>
        <tr>
            <td>
             Furnishing & Appliances
             <ol>
                <li><a href="furniture.php">Furniture</a></li>
                <li><a href="#">Curtains and Carpets</a></li>
                <li><a href="#">Kitchen supplies</a></li>
                <li><a href="#">Hardware tools</a></li>
             </ol>

             </td>
            <td>
                Fashion
                <ol>
                   <li><a href="wclothinprocess.php">Women's Clothing</a></li>
                   <li><a href="#">Women's Accessories</a></li>
                   <li><a href="#">Men's Clothing</a></li>
                   <li><a href="#">Men's Accessories</a></li>
                </ol>
   
            </td>
        </tr>
        <tr>
            <td>
             Education
             <ol>
                <li><a href="#">Course Books and Notes</a></li>
                <li><a href="#">Engineering Materials</a></li>
                <li><a href="#">Medical</a></li>
                <li><a href="#">Stationery</a></li>
                <li><a href="#">Others</a></li>
             </ol>

            </td>
            <td>
                Electronics & Appliances
                <ol>
                   <li><a href="#">Heaters</a></li>
                   <li><a href="#">Induction cooker</a></li>
                   <li><a href="#">Fan</a></li>
                   <li><a href="#">Computer and parts</a></li>
                </ol>
   
            </td>
        </tr>
        <tr>
            <td>
             Mobile & Appliances
             <ol>
                <li><a href="#">Mobile</a></li>
                <li><a href="#">Telephone</a></li>
                <li><a href="#">Charger and USB</a></li>
                <li><a href="#">Gaming Stuff</a></li>
             </ol>

            </td>
            <td>
                Music Instruments
                <ol>
                   <li><a href="#">Guitars</a></li>
                   <li><a href="#">Piano And Keyword</a></li>
                   <li><a href="#">Cajons</a></li>
                   <li><a href="#">Microphones and Studio Equipment</a></li>
                   <li><a href="#">Others</a></li>
                </ol>

            </td>
        </tr>
        <tr>
            <td>
             Sports & Fitness
             <ol>
                <li><a href="#">Bicycle and its parts</a></li>
                <li><a href="#">Fitness and Gym Equipments</a></li>
                <li><a href="#">Fitness Supplements</a></li>
                <li><a href="#">Outdoor and Hiking</a></li>
                <li><a href="#">Other Sporting Goods</a></li>
             </ol>

            </td>
            <td>
                EXTRAS
                <ol>
                   <li><a href="#">Extra</a></li>
                </ol>
            </td>
           
        </tr>
        </table>
    </body>
</html>