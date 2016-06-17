<html >
  <head>
    <meta charset="UTF-8">
    <title>Register </title>
    
   

    
        <link rel="stylesheet" href="css/style2.css">


  </head>

  <body>
	
    
 <header>
    
    <<div class="nav">
    <ul>  
    <li><a href="login.php" ><img src="images2/user.png" width="20" height="20">&nbsp;Login</a></li>
    <li><a href="register.php" >Register</a></li>
    <li><a href="works.html" >How It Works</a></li>
    <li><a href="#" >Uses</a></li>
    <li><a href="#" >About</a></li>
    </ul>
    </div>
      </header>  
      
<section>
		<div id='imgChange'>
          
<?php


$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $conn5 = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS, $DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

            $auser=$_POST["user"];
			$apass=$_POST["passw"];
			$amail=$_POST["mail"];
			$dosya_adi=$_FILES["resim"]["name"];
			
if($auser && $apass && $amail && $dosya_adi)
{
	
	
	
	if($_FILES["resim"]["size"]<1024*1024)
	{
		if($_FILES["resim"]["type"]=="image/jpeg")
		{
			
			$uret=array("as","rt","bk","cd");
			$uzanti=substr($dosya_adi,-4,4);
			$sayi=rand(1,1000);
			$yeni_ad="dosyalar/".$uret[rand(0,4)].$sayi.$uzanti;
			if(move_uploaded_file($_FILES["resim"]["tmp_name"],$yeni_ad))
			{			
		echo "
		<span>
                    <img src='images2/check.png' width='120' height='120'>
        </span>
		           
			<div id='alt'> <h1>Kayıt Yapılmıştır</h1></div>";
		
				mysqli_query($conn,"insert into user_info (name,password,email,photo) values ('$auser','$apass','$amail','$yeni_ad')");
				mysqli_close($conn);
				header("refresh:3;list.php");
				}
				else{
					echo"
					<span>
                    <img src='images2/error.png' width='120' height='120'>
        </span>
					<div id='alt'> <font color='#e74c3c' size='5' face='Oswald'>Resim yüklenemedi</font></div>";
					header("refresh:2;register.php");
					}
			}
			else{
		echo"
		<span>
                    <img src='images2/error.png' width='120' height='120'>
        </span>
		<div id='alt'> <font color='#e74c3c' size='5' face='Oswald'>Resim sadece jpeg formatında olabilir</font></div>";
		header("refresh:2;register.php");
				}
		
	}
	else{
		echo"
		<span>
                    <img src='images2/error.png' width='120' height='120'>
        </span>
		<div id='alt'> <font color='#e74c3c' size='5' face='Oswald'>Resim boyutu 1 MB geçemez<2h1></font>";
		header("refresh:2;register.php");
		}
	}
	
			
	
	else{
		echo"
		<span>
                    <img src='images2/error.png' width='120' height='120'>
        </span>
		<div id='alt'> <font color='#e74c3c' size='5' face='Oswald'>Boşlukları doldurun</font></div>";
		header("refresh:2;index.php");
		}

	?>
	  </div>
		
		</section>  
  </body>
</html>