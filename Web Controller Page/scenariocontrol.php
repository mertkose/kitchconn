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
          <link rel="stylesheet" href="css/style7.css">

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
            <li class="ClickMe"><a href="profile.php"><i class="Profilei">&nbsp;</i>Profile</a></li>
            <li class="ClickMe">
              <a href="listcontrol.php"><i class="Meet">&nbsp;</i>Devices</a>
            
            </li>
            <li class="ClickMe"><a href="#"><i class="Messages">&nbsp;</i>Messages <span>2</span></a></li>
            <li class="ClickMe"><a href="monitor.php"><i class="FeaturedM">&nbsp;</i>Monitor</a></li>
            <li class="ClickMe"><a href="statistic.php"><i class="AnonymousQ">&nbsp;</i>Statics</a></li>
            <li class="active ClickMe"><a href="scenario.php"><i class="ProfileP">&nbsp;</i>Scenario</a></li>
            <li class="ClickMe"><a href="#"><i class="Rating">&nbsp;</i>Logout</a></li>
          </ul>
        </div>

        <div class="profile clearfix">          
            <div class="header clearfix">
           
              <h2 class="left">Scenario</h2> 
                
               
               <div class="right bottoms"> 
                
                <div class="bottom yeah">
                <div class="">
                 <img src="images2/murat.png" width="100%" height="100%" ></div>
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

	 
if(isset($_POST['submit'])){

	      
       if(isset($_POST['thing'][0])){
				
			$results = $conn->query("update kitchen_control set fridge='1' where user_id='admin'");


			}else
			{
				$results = $conn->query("update kitchen_control set fridge='0' where user_id='admin'");

				}
				
			         if(isset($_POST['thing'][1]))
		             	{
				
		                	$results = $conn->query("update kitchen_control set oven='1' where user_id='admin'");

				              }
				               else
			                   {
				              $results = $conn->query("update kitchen_control set oven='0' where user_id='admin'");

				                   }
	
				                     if(isset($_POST['thing'][2]))
			                             {
				
			                       $results = $conn->query("update kitchen_control set dish='1' where user_id='admin'");

				                             }
				                              else
			                                {
				                   $results = $conn->query("update kitchen_control set dish='0' where user_id='admin'");

				                               }
				
				
				if(isset($_POST['thing'][3]))
			{
				
			 $results = $conn->query("update kitchen_control set microwave='1' where user_id='admin'");

				}
				   else
			          {
				         $results = $conn->query("update kitchen_control set microwave='0' where user_id='admin'");

				      }
				
					
			if(isset($_POST['thing'][4]))
			{
				
			$results = $conn->query("update kitchen_control set lamp='1' where user_id='admin'");

				}
				 else
			          {
				         $results = $conn->query("update kitchen_control set lamp='0' where user_id='admin'");

				      }
				
				
				
			if(isset($_POST['thing'][5]))
			{
				
			$results = $conn->query("update kitchen_control set toaster='1' where user_id='admin'");

				}
				else
			          {
				        $results = $conn->query("update kitchen_control set toaster='0' where user_id='admin'");

			
				      }
						
				
			if(isset($_POST['thing'][6]))
			{
				
			$results = $conn->query("update kitchen_control set coffee='1' where user_id='admin'");

			
				}				
				else
			          {
				$results = $conn->query("update kitchen_control set coffee='0' where user_id='admin'");

			
				      }
		echo "
		<center>
                    <div class='controlp'><img src='images2/gunes.png' width='170' height='150'>
		           
			<div id='alt'> <h1><font color='#1bc6a4' size='5' face='Oswald'>Good Morning is activated</font></h1></div></center></div>";		
		header("refresh:2;scenario.php");		
		}

else{
		echo "<b>Please Select At least One Option.</b>";
	}
//////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////
	 
if(isset($_POST['submit2'])){

	      
       if(isset($_POST['thing2'][0])){
				
			$results = $conn->query("update kitchen_control set fridge='1' where user_id='admin'");

			}else
			{
				$results = $conn->query("update kitchen_control set fridge='0' where user_id='admin'");
				}
				
			         if(isset($_POST['thing2'][1]))
		             	{
				
		                	$results = $conn->query("update kitchen_control set oven='1' where user_id='admin'");
				              }
				               else
			                   {
				              $results = $conn->query("update kitchen_control set oven='0' where user_id='admin'");
				                   }
	
				                     if(isset($_POST['thing2'][2]))
			                             {
				
			                       $results = $conn->query("update kitchen_control set dish='1' where user_id='admin'");
				                             }
				                              else
			                                {
				                   $results = $conn->query("update kitchen_control set dish='0' where user_id='admin'");
				                               }
				
				
				if(isset($_POST['thing2'][3]))
			{
				
			$results = $conn->query("update kitchen_control set microwave='1' where user_id='admin'");
				}
				   else
			          {
				         $results = $conn->query("update kitchen_control set microwave='0' where user_id='admin'");
				      }
				
					
			if(isset($_POST['thing2'][4]))
			{
				
			$results = $conn->query("update kitchen_control set lamp='1' where user_id='admin'");
				}
				 else
			          {
				         $results = $conn->query("update kitchen_control set lamp='0' where user_id='admin'");
				      }
				
				
				
			if(isset($_POST['thing2'][5]))
			{
				
			$results = $conn->query("update kitchen_control set toaster='1' where user_id='admin'");
				}
				else
			          {
				         $results = $conn->query("update kitchen_control set toaster='0' where user_id='admin'");
				      }
						
				
			if(isset($_POST['thing2'][6]))
			{
				
			$results = $conn->query("update kitchen_control set coffee='1' where user_id='admin'");
				}				
				else
			          {
				      $results = $conn->query("update kitchen_control set coffee='0' where user_id='admin'");
				      }
				
			echo "
		<center>
                    <div class='controlp'><img src='images2/ay.png' width='150' height='150'>
		           
			<div id='alt'> <h1><font color='#1bc6a4' size='5' face='Oswald'>Good Night is activated</font></h1></div></center></div>";
			header("refresh:2;scenario.php");	
		}

else{
		echo "<b>Please Select At least One Option.</b>";
	}
//////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['submit3'])){

	      
       if(isset($_POST['thing3'][0])){
				
			$results = $conn->query("update kitchen_control set fridge='1' where user_id='admin'");

			}else
			{
				$results = $conn->query("update kitchen_control set fridge='0' where user_id='admin'");
				}
				
			         if(isset($_POST['thing3'][1]))
		             	{
				
		                	$results = $conn->query("update kitchen_control set oven='1' where user_id='admin'");
				              }
				               else
			                   {
				             $results = $conn->query("update kitchen_control set oven='0' where user_id='admin'");
				                   }
	
				                     if(isset($_POST['thing3'][2]))
			                             {
				
			                        $results = $conn->query("update kitchen_control set dish='1' where user_id='admin'");
				                             }
				                              else
			                                {
				                    $results = $conn->query("update kitchen_control set dish='0' where user_id='admin'");
				                               }
				
				
				if(isset($_POST['thing3'][3]))
			{
				
			$results = $conn->query("update kitchen_control set microwave='1' where user_id='admin'");
				}
				   else
			          {
				      $results = $conn->query("update kitchen_control set microwave='0' where user_id='admin'");
				      }
				
					
			if(isset($_POST['thing3'][4]))
			{
				
		$results = $conn->query("update kitchen_control set lamp='1' where user_id='admin'");
				}
				 else
			          {
				  $results = $conn->query("update kitchen_control set lamp='0' where user_id='admin'");
				      }
				
				
				
			if(isset($_POST['thing3'][5]))
			{
				
		$results = $conn->query("update kitchen_control set toaster='1' where user_id='admin'");
				}
				else
			          {
			$results = $conn->query("update kitchen_control set toaster='0' where user_id='admin'");
				      }
						
				
			if(isset($_POST['thing3'][6]))
			{
				
			$results = $conn->query("update kitchen_control set coffee='1' where user_id='admin'");
				}				
				else
			          {
			$results = $conn->query("update kitchen_control set coffee='0' where user_id='admin'");
				      }
		echo "
		<center>
                    <div class='controlp'><img src='images2/adam.png' width='150' height='150'>
		           
			<div id='alt'> <h1><font color='#1bc6a4' size='5' face='Oswald'>I'm Away is activated</font></h1></div></center></div>";		
			header("refresh:2;scenario.php");	
		}

else{
		echo "<b>Please Select At least One Option.</b>";
	}
	 

?>

            </div>
          
       
    </div>
    
    
   
</body>
</html>
    
      

    
    
