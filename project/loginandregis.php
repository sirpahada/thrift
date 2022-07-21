<htmL>
    <head>
       <title>Login and registration page </title>
       <link rel="stylesheet" href="loginandreg.css" >
    </head>
    <body>
         <div class="hero">
            <div class="form-box">
               <div class="button-box">
                   <div id="btn"></div>
                    <button type ="button" style="color: black; font-weight: bold;" class="toggle-btn" onclick="Login()">  Log In  </button>
                    <button type ="button" style="color: black; font-weight: bold;" class="toggle-btn" onclick="Register()">Register</button>
                </div>
                <!--for login-->
                <form action="logindb.php" id="Login" class="input-group" method="post">
                    <input type="text" class="input-field" name="username" placeholder="User Id" required>
                    <input type="password" class="input-field" name="pw" placeholder="User Password" required> 
                    <input type="checkbox" class="chech-box"><span> Remember password </span>
                     <button type="submit" class="submit-btn" >Log In </button>
                </form>
                <!--for registration-->
                 <form action="home.php" id="Register" class="input-group" method ="post">
                    <input type="text" name="fullname" class="input-field" placeholder="Enter your Full Name" required>
                    <input type="text" name="username" class="input-field" placeholder="Enter User Id" required> 
                    <input type="email" name="email" class="input-field" placeholder="Enter Email Id" required> 
                    <input type="number" name="mobile" class="input-field" placeholder="Enter mobilenumber" required> 
                    <input type="password" name="pw" class="input-field" placeholder="Enter User Password" required> 
                    <input type="password"  class="input-field" placeholder="Re-Enter User Password" required>
                    <input type="checkbox" class="chech-box"><span>I agree all the terms & conditions</span>
                     <button type="submit" class="submit-btn" >Register </button><br><br>
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