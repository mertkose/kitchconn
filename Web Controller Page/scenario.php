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
            <li class="ClickMe"><a href="message.php"><i class="Messages">&nbsp;</i>Messages <span>2</span></a></li>
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
    
           <div class='page'>         
  <div class='content'> 
    <div class='circle'>    
      <div class='circle_title'>
        <h2>Good Morning</h2>
        
      </div>
      <a href="#popup13">
      <div class='circle_inner'>
        <div class='circle_inner__layer'>
          <img src='images2/pc1.png'>
        </div>
        <div class='circle_inner__layer'>
          <img src='images2/pc2.png'>
        </div>
        <div class='circle_inner__layer'>
          <img src='images2/pc3.png'>
        </div>
        </a>
      </div>
      <div class='content_shadow'></div>
    </div>
  </div>
  <div class='content'>
    <div class='circle'>
      <div class='circle_title'>
        <h2>Good Night</h2>
       
      </div>
      <a href="#popup14">
      <div class='circle_inner'>
        <div class='circle_inner__layer'>
          <img src='images2/pc8.png'>
        </div>
        <div class='circle_inner__layer'>
         <img src='images2/pc9.png'>
        </div>
        <div class='circle_inner__layer'>
          <img src='images2/pc10.png'>
        </div>
        </a>
      </div>
      <div class='content_shadow'></div>
    </div>
  </div>
  <div class='content'>
    <div class='circle'>
      <div class='circle_title'>
        <h2>I'm Away</h2>
        
      </div>
      <a href="#popup15">
      <div class='circle_inner'>
        <div class='circle_inner__layer'>
          <img src='images2/pc4.png'>
        </div>
        <div class='circle_inner__layer'>
          <img src='images2/pc5.png'>
        </div>
        <div class='circle_inner__layer'>
          <img src='images2/pc6.png'>
        </div>
        </a>
      </div>
      
      <div class='content_shadow'></div>
    </div>
  </div>
</div>
    
  
   <form action="scenariocontrol.php" method="POST" enctype="multipart/form-data"> 
<div id="popup13" class="overlay">
	<div class="popup">
		<h2><b><center>Good Morning</center></b></h2>
		<a class="close" href="#">&times;</a>
	<div class="content2">
        <img src="images2/çizgi.jpg" width="100%" height="100%"><br>		
		</div>
        <div class="other"  id="popscroll">
   <div id="kontrol"> 
   <ul class="box">
     <li><img src="mutfak/fridge.png" width="30" height="30">&nbsp;Fridge
    <input type='checkbox' name='thing[0]' value='1' id="thing"/><label for="thing"></label></li>
     <li><img src="mutfak/oven.png" width="30" height="30">&nbsp;Oven
     <input type='checkbox' name='thing[1]' value='1' id="thing2"/><label for="thing2"></label></li>
     <li><img src="mutfak/dish.png" width="30" height="30">&nbsp;Dishwasher
     <input type='checkbox' name='thing[2]' value='1' id="thing3"/><label for="thing3"></label></li>
     <li><img src="mutfak/microwave.png" width="30" height="30">&nbsp;Microwave
     <input type='checkbox' name='thing[3]' value='1' id="thing4"/><label for="thing4"></label></li>
     <li><img src="mutfak/lamp.png" width="30" height="30">&nbsp;Lamp
     <input type='checkbox' name='thing[4]' value='1' id="thing5"/><label for="thing5"></label></li>
     <li><img src="mutfak/toaster.png" width="30" height="30">&nbsp;Toaster
     <input type='checkbox' name='thing[5]' value='1' id="thing6"/><label for="thing6"></label></li>
      <li><img src="mutfak/coffee.png" width="30" height="30">&nbsp;Coffee Machine
      <input type='checkbox' name='thing[6]' value='1' id="thing7"/><label for="thing7"></label></li>
  </ul>
</div>
</div>
         <center><button type="submit"   name="submit">Select</button></center><br>
        
	</div>
</div>  
 <form>
 <form action="scenariocontrol.php" method="POST" enctype="multipart/form-data"> 
<div id="popup14" class="overlay">
	<div class="popup">
		<h2><b><center>Good Night</center></b></h2>
		<a class="close" href="#">&times;</a>
	<div class="content2">
        <img src="images2/çizgi.jpg" width="100%" height="100%"><br>		
		</div>
        <div class="other"  id="popscroll">
   <div id="kontrol"> 
   <ul class="box">
     <li><img src="mutfak/fridge.png" width="30" height="30">&nbsp;Fridge
    <input type='checkbox' name='thing2[0]' value='valuable' id="thing8"/><label for="thing8"></label></li>
     <li><img src="mutfak/oven.png" width="30" height="30">&nbsp;Oven
     <input type='checkbox' name='thing2[1]' value='valuable' id="thing9"/><label for="thing9"></label></li>
     <li><img src="mutfak/dish.png" width="30" height="30">&nbsp;Dishwasher
     <input type='checkbox' name='thing2[2]' value='valuable' id="thing10"/><label for="thing10"></label></li>
     <li><img src="mutfak/microwave.png" width="30" height="30">&nbsp;Microwave
     <input type='checkbox' name='thing2[3]' value='valuable' id="thing11"/><label for="thing11"></label></li>
     <li><img src="mutfak/lamp.png" width="30" height="30">&nbsp;Lamp
     <input type='checkbox' name='thing2[4]' value='valuable' id="thing12"/><label for="thing12"></label></li>
     <li><img src="mutfak/toaster.png" width="30" height="30">&nbsp;Toaster
     <input type='checkbox' name='thing2[5]' value='valuable' id="thing13"/><label for="thing13"></label></li>
      <li><img src="mutfak/coffee.png" width="30" height="30">&nbsp;Coffee Machine
      <input type='checkbox' name='thing2[6]' value='valuable' id="thing14"/><label for="thing14"></label></li>
  </ul>
</div>
</div>
         <center><button type="submit"   name="submit2">Select</button></center><br>
         
	</div>
</div> 
<form> 
<form action="scenariocontrol.php" method="POST" enctype="multipart/form-data"> 
<div id="popup15" class="overlay">
	<div class="popup">
		<h2><b><center>I'm Away</center></b></h2>
		<a class="close" href="#">&times;</a>
	<div class="content2">
        <img src="images2/çizgi.jpg" width="100%" height="100%"><br>		
		</div>
        <div class="other"  id="popscroll">
   <div id="kontrol"> 
   <ul class="box">
    <li><img src="mutfak/fridge.png" width="30" height="30">&nbsp;Fridge
    <input type='checkbox' name='thing3[0]' value='valuable' id="thing15"/><label for="thing15"></label></li>
     <li><img src="mutfak/oven.png" width="30" height="30">&nbsp;Oven
     <input type='checkbox' name='thing3[1]' value='valuable' id="thing16"/><label for="thing16"></label></li>
     <li><img src="mutfak/dish.png" width="30" height="30">&nbsp;Dishwasher
     <input type='checkbox' name='thing3[2]' value='valuable' id="thing17"/><label for="thing17"></label></li>
     <li><img src="mutfak/microwave.png" width="30" height="30">&nbsp;Microwave
     <input type='checkbox' name='thing3[3]' value='valuable' id="thing18"/><label for="thing18"></label></li>
     <li><img src="mutfak/lamp.png" width="30" height="30">&nbsp;Lamp
     <input type='checkbox' name='thing3[4]' value='valuable' id="thing19"/><label for="thing19"></label></li>
     <li><img src="mutfak/toaster.png" width="30" height="30">&nbsp;Toaster
     <input type='checkbox' name='thing3[5]' value='valuable' id="thing20"/><label for="thing20"></label></li>
      <li><img src="mutfak/coffee.png" width="30" height="30">&nbsp;Coffee Machine
      <input type='checkbox' name='thing3[6]' value='valuable' id="thing21"/><label for="thing21"></label></li>
  </ul>
</div>
</div>
         <center><button type="submit"   name="submit3">Select</button></center><br>
    
	</div>
</div>  
     <form>

            </div>
          
       
    </div>
    
    
   
</body>
</html>
    
      

    
    
