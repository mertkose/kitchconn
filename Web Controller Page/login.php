﻿
<?php


$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $conn5 = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS, $DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>

<html >
  <head>
    <meta charset="UTF-8">
    <title>Login </title>
    
   
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 
    
        <link rel="stylesheet" href="css/custom.css">


  </head>

  <body>
	
    
  <header>
     <div class="nav">
    <ul >  
    <li><a href="login.php" ><img src="images2/user.png" width="20" height="20">&nbsp;Login</a></li>
    <li><a href="register.php" >Register</a></li>
    <li><a href="works.html" >How It Works</a></li>
    <li><a href="#" >Uses</a></li>
    <li><a href="index.html" >About</a></li>
    </ul>
    </div>
      </header>  
 
    <section>
   
    
    <div id="imgChange">
    <form action="logincontrol.php" method="post" name="giris" enctype="multipart/form-data">
  <span>
  
  <img src="images2/profile3.png" width="100" height="100">
  
  </span>
 
  <h1>Member Login</h1>
  
  
  
    <input placeholder='User Name' name="user" type='text' class="name">
    <input placeholder='Password' name="passw" type='password' class="pass">
   
    

  <button type="submit">LOGIN</button>
 
   
  <h2>
    <a href='#'>Forgot Username?</a>
  </h2>

    
   </form>
     </div>
    </section>
    
  </body>
</html>
