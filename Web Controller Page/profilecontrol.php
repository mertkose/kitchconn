<!DOCTYPE html>



    <html>
<head>
	<meta charset="UTF-8">
	<title>Kitchconn</title>
	
	<link rel="stylesheet" href="css/style5.css">
    
 <link rel="stylesheet" href="css/reset2.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style6.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
          


</head>
<body>
 
    <div class="wraper">
    
  
 
      <div class="container clearfix">
      <ul class="tools">
  <li class="tool-btn">
    <input id="pencil_btn" type="radio" name="toolbar" checked>
    <label for="pencil_btn">
      <i><img src="mutfak/minus.png" width="20" height="20"></i>
    </label>
  </li>
  <li class="tool-btn">
    <input id="paint_btn" type="radio" name="toolbar">
    <label for="paint_btn">
     <a href="#popup12"> <i><img src="mutfak/plus.png" width="20" height="20"></i></a>
    </label>
  </li>
  

</ul>
      
        <div class="menu left clearfix" id="menu">
          <ul>
           <a href="#"><i>&nbsp;</i><center><img src="images2/yenilogo.png" width="100" height="100"></center></a>
           <hr color="#525C5F" size="1">
            <li class="active ClickMe"><a href="profile.php"><i class="Profilei">&nbsp;</i>Profile</a></li>
            <li class="ClickMe">
              <a href="listcontrol.php"><i class="Meet">&nbsp;</i>Devices</a>
            
            </li>
            <li class="ClickMe"><a href="message.php"><i class="Messages">&nbsp;</i>Messages <span>2</span></a></li>
            <li class="ClickMe"><a href="monitor.php"><i class="FeaturedM">&nbsp;</i>Monitor</a></li>
            <li class="ClickMe"><a href="statistic.php"><i class="AnonymousQ">&nbsp;</i>Statics</a></li>
            <li class="ClickMe"><a href="scenario.php"><i class="ProfileP">&nbsp;</i>Scenario</a></li>
            <li class="ClickMe"><a href="#"><i class="Rating">&nbsp;</i>Logout</a></li>
          </ul>
        </div>

        <div class="profile clearfix">          
            <div class="header clearfix">
           
              <h2 class="left">Profile</h2> 
                
               
               <div class="right bottoms"> 
                
                <div class="bottom yeah">
                <div class="">
                 <img src="images2/profile3.png" width="50px" height="50px" class="pro"></div>
                 <br>
                </div>  
                    <div class="username">
                   <h3 class="left">Murat Aşkar</h3>
                   </div>                          
              </div>
             
          </div>
          
           <?php
		  
$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $conn = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS, $DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	        $auser=$_POST["user"];
			$apass=$_POST["passw"];
			$amail=$_POST["mail"];
			$dosya_adi=$_FILES["resimler"]["name"];

          if($auser && $apass && $amail && $dosya_adi)
{

	
	if($_FILES["resimler"]["size"]<1024*1024)
	{
		if($_FILES["resimler"]["type"]=="image/jpeg")
		{
		    $dosya_adi=$_FILES["resimler"]["name"];
			$uret=array("as","rt","bk","cd");
			$sayi=rand(1,1000);
			$yeni_ad="dosyalar/".$uret[rand(0,4)].$sayi."jpg";
			if(move_uploaded_file($_FILES["resimler"]["tmp_name"],"dosyalar/"))
			{			
		echo "
		<center>
                    <div class='controlp'><img src='images2/check.png' width='150' height='150'>
		           
			<div id='alt'> <h1>Profile changes is saved</h1></div></center></div>";
			  $conn->query("update user_info set name='$auser',photo='$yeni_ad',email='$amail',password='$apass' where user_id='admin'");
				mysqli_close($conn);
				header("refresh:3;profile.php");
				}
         else{
					echo"
					<center>
                    <div class='controlp'><img src='images2/error.png' width='150' height='150'>
        
					<div id='alt'> <font color='#e74c3c' size='5' face='Oswald'>Could not load picture</font></div></center></div>";
					 echo "Not uploaded because of error #".$_FILES["resimler"]["error"];
					header("refresh:2;profile.php");
					}
					
		 }
		 else{
		echo"	<center>
                    <div class='controlp'><img src='images2/error.png' width='150' height='150'>
       
		<div id='alt'> <font color='#e74c3c' size='5' face='Oswald'>Picture format can be only Jpeg</font></div></center></div>";
		header("refresh:2;profile.php");
				}
				}
	else{
		echo"
		<center>
                    <div class='controlp'><img src='images2/error.png' width='150' height='150'>
        
		<div id='alt'> <font color='#e74c3c' size='5' face='Oswald'>Picture size must be less than 1MB <2h1></font></center></div>";
		header("refresh:2;profile.php");
		}
	}
		else{
		echo"		
		<center>
                    <div class='controlp'><img src='images2/error.png' width='150' height='150'>
       
		<div id='alt'> <font color='#e74c3c' size='5' face='Oswald'>Fill the blanks</font></div></center></div>";
		header("refresh:2;profile.php");
		}		
		 mysqli_close($conn);
         ?>      
		

<div id="popup12" class="overlay">
	<div class="popup">
		<h2><b><center>Cihaz Ekle</center></b></h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
        <img src="images2/çizgi.jpg" width="100%" height="100%"><br><br><br>		
		</div>
        <form action="#" method="post" onchange="updateimage()">
         <center>
  <option value="Fridge">Fridge</option>
  <option value="Oven">Oven</option>
  <option value="Microwave">Microwave</option>
  <option value="Lamp">Lamp</option>
  <option value="Toaster">Toaster</option>
  <option value="Coffee Machine">Coffee Machine</option>
  <option value="Dishwasher">Dishwasher</option>
  
  </select>  </center><br><br><br><br><br><br><br><br>
         <center><button type="submit"   name="submit">Ekle</button></center><br>
         <form>
	</div>
</div>  


            </div>
          
       
    </div>
    
    
   
</body>
</html>
    
      

    
    
