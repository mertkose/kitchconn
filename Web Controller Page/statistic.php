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
          
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  
  <style>
    html,
    body,
    #myChart {
      height: 100%;
      width: 100%;
	  
    }
  </style>

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
            <li class=" ClickMe"><a href="profile.php"><i class="Profilei">&nbsp;</i>Profile</a></li>
            <li class="ClickMe">
              <a href="listcontrol.php"><i class="Meet">&nbsp;</i>Devices</a>
            
            </li>
            <li class="ClickMe"><a href="message.php"><i class="Messages">&nbsp;</i>Messages <span>2</span></a></li>
            <li class="ClickMe"><a href="monitor.php"><i class="FeaturedM">&nbsp;</i>Monitor</a></li>
            <li class="active ClickMe"><a href="statistic.php"><i class="AnonymousQ">&nbsp;</i>Statistics</a></li>
            <li class="ClickMe"><a href="scenario.php"><i class="ProfileP">&nbsp;</i>Scenario</a></li>
            <li class="ClickMe"><a href="#"><i class="Rating">&nbsp;</i>Logout</a></li>
          </ul>
        </div>

        <div class="profile clearfix">          
            <div class="header clearfix">
           
              <h2 class="left">Statistics</h2> 
                
               
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
          <center>
          <img src="images2/good.jpg" id="yenimage2">
          <img src="images2/smoke.jpg" id="yenimage2">
          <img src="images2/gas2.jpg" id="yenimage2">
          </center>
         <center><div id='myChart'></div></center>
  <script>
    var myConfig6 = {
      "type": "gauge",
      "scale-r": {
        "aperture": 200,
        "values": "0:1000:50",
        "center": {
          "size": 5,
          "background-color": "#66CCFF #FFCCFF",
          "border-color": "none"
        },
        "ring": { //Ring with Rules
          "size": 15,
          "rules": [{
            "rule": "%v >= 0 && %v <= 450",
            "background-color": "#40d47c"
          },  {
            "rule": "%v >= 450 && %v <= 550",
            "background-color": "#FFEB3B"
          }, {
            "rule": "%v >= 550 && %v <=1000",
            "background-color": "#fb7e68"
          }]
        }
      },
      "plot": {
        "csize": "5%",
        "size": "100%",
        "background-color": "#000000"
      },
      "series": [{
        "values": [405]
      }]
    };

    zingchart.render({
      id: 'myChart',
      data: myConfig6,
      height: "100%",
      width: "100%"
    });
  </script>


<div id="popup12" class="overlay">
	<div class="popup">
		<h2><b><center>Cihaz Ekle</center></b></h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
        <img src="images2/çizgi.jpg" width="100%" height="100%"><br><br><br>		
		</div>
        <form action="#" method="post" onchange="updateimage()">
         <center><select  id="resim" name="resim">
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
    
      

    
    
