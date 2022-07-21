<htmL> 
<head>
   <title>Login and registration page </title>
   <link rel="stylesheet" href="stylesheet.css" >
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
            <li><a href="registration.php">Sell</a></li> 
            <li><a>Help</a></li>
        </ul>
        <box>
            <form action="process.php" method="POST">
            <input type="email" name="email" id="email" placeholder="Email ID" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <input type="submit" id="signin" value="Login"><br>
            <center><i>Don't have an account?</i> <a href="registration.php">Sign Up here</a></center>
            </form>
        </box><br><br><br><br><br>
        
        <div class="search">
            <input type="text" placeholder="What Are You Looking For?" id="search" name="Search">
            <input type="submit" value="GO">
        </div><hr>
        <br>
        <h1><center>Popular ADs</center></h2>
        <br>
        <hr>
     <div class="hero">
        <div class="form-box">
           <div class="button-box">
               <div id="btn"></div>
                <button type ="button" class="toggle-btn" onclick="Login()">  Log In  </button>
                 <button type ="button" class="toggle-btn" onclick="Register()">Register</button>
                
            </div>
            <!--for login-->
            <form id="Login" class="input-group" action="process.php" method="POST">
                <input type="email" class="input-field" name="email" id="email" placeholder="Email Id" required>
                <input type="password" class="input-field" name="password" id="password" placeholder="Password" required> 
                <input type="checkbox" class="chech-box"><span> Remember password </span>
                <button type="submit" class="submit-btn" value="Login" >Log In </button>
            </form>
            <!--for registration-->
             <form id="Register" class="input-group" action="regprocess.php" method="POST">
                <input type="text" class="input-field" name="firstname" placeholder="First Name" required> 
                <input type="text" class="input-field" name="lastname" placeholder="Last Name" required>
                <input type="number" class="input-field" name="phone" placeholder="PhoneNo." required> 
                <input type="email" class="input-field" name="email" placeholder="Email Id" required> 
                <input type="password" class="input-field" name="password" placeholder="Password" required> 
                <input type="checkbox" class="chech-box"><span>I agree all the terms & conditions</span>
                <button type="submit" class="submit-btn" >Register </button>
            </form>
        </div>
    </div>
    <script>
       
       var x =document.getElementById("Login");
       var y =  document.getElementById("Register");
       var z =document.getElementById("btn");
    
     function Register()
     {
         x.style.left="-400px";
         y.style.left="50px";
         z.style.left="110px";
     }
      function Login()
     {
         x.style.left="50px";
         y.style.left="450px";
         z.style.left="0px";
     }
     </script>
    </body>
</htmL>