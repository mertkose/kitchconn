<html >
  <head>
    <meta charset="UTF-8">
    <title>Register </title>
    
   

    
        <link rel="stylesheet" href="css/style2.css">


  </head>

  <body>
	
    
<header>
    
   <div class="nav">
    <ul>  
    <li><a href="login.php" ><img src="images2/user.png" width="20" height="20">&nbsp;Login</a></li>
    <li><a href="index.php" >Register</a></li>
    <li><a href="#" >How It Works</a></li>
    <li><a href="#" >Uses</a></li>
    <li><a href="#" >About</a></li>
    </ul>
    </div>
      </header> 
      
<section>
		
          
<?php
$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

$auser=$_POST["user"];
$apass=$_POST["passw"];

$conn = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$results = $conn->query("select * from user_info where user_id='$auser' and password='$apass'");

if($apass && $auser)
{
		
if($results->num_rows != 1 ){
	echo"
				<div id='imgChange'>
				<span>
                    <img src='images2/error.png' width='120' height='120'>
           </span>
		   </div>
				<div id='alt'><font color='#e74c3c' size='5' face='Oswald'>Do not find any user</font></div>";	
				header("refresh:2;login.php");
	
	}
	else{
				
				
				echo"
				<span>
                    <img src='images2/murat.png' width='120' height='120'>
         </span>
				<div id='alt'><h1>Welcome $auser </h1></div>";
				header("refresh:2;listcontrol.php");
				$results->close();
					}
		
				}	
	else{
		echo"
		<span>
                    <img src='images2/error.png' width='120' height='120'>
        </span>
		
		<div id='alt'><font color='#e74c3c' size='5' face='Oswald'>Fill the blanks</font></div>";
		header("refresh:2;login.php");
		}
	
mysqli_close($conn);
	?>
	  
		
		</section>  
  </body>
</html>