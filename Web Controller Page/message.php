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
            <li class="ClickMe"><a href="profile.php"><i class="Profilei">&nbsp;</i>Profile</a></li>
            <li class="ClickMe">
              <a href="listcontrol.php"><i class="Meet">&nbsp;</i>Devices</a>
            
            </li>
            <li class="active ClickMe"><a href="message.php"><i class="Messages">&nbsp;</i>Messages <span>2</span></a></li>
            <li class="ClickMe"><a href="monitor.php"><i class="FeaturedM">&nbsp;</i>Monitor</a></li>
            <li class="ClickMe"><a href="statistic.php"><i class="AnonymousQ">&nbsp;</i>Statics</a></li>
            <li class="ClickMe"><a href="scenario.php"><i class="ProfileP">&nbsp;</i>Scenario</a></li>
            <li class="ClickMe"><a href="#"><i class="Rating">&nbsp;</i>Logout</a></li>
          </ul>
        </div>

        <div class="profile clearfix">          
            <div class="header clearfix">
           
              <h2 class="left">Messages</h2> 
                
               
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
          
          <ol class="activity-feed">
  <li class="feed-item">
    <time class="date" datetime="9-25">Sep 25</time>
    <span class="text"><font size="4"><b>11:50 AM</b></font>&nbsp;&nbsp;<font color="#4B9BE6">Temperature sensor was 18C</font><img src="images2/hot.png" width="35" height="35"  style="float:right;margin-top:-12px;"></span>
  </li>
  <li class="feed-item">
    <time class="date" datetime="9-24">Sep 24</time>
    <span class="text"><font size="4"><b>11:50 AM</b></font>&nbsp;&nbsp;<font color="#51C08A">Temperature sensor was active<img src="images2/ok.png" width="40" height="40"  style="float:right;margin-top:-12px;"></font></span>
  </li>
  <li class="feed-item">
    <time class="date" datetime="9-23">Sep 23</time>
    <span class="text"><font size="4"><b>11:50 AM</b></font>&nbsp;&nbsp;<font color="#51C08A">Kitchen lamb was opened<img src="mutfak/acik.png" width="40" height="40" style="float:right;margin-top:-12px;"></font></span>
  </li>
  <li class="feed-item">
    <time class="date" datetime="9-21">Sep 21</time>
    <span class="text"><font size="4"><b>11:50 AM</b></font>&nbsp;&nbsp;<font color="#51C08A">Kitchen lamb switch was on</font><img src="mutfak/acik.png" width="40" height="40"  style="float:right;margin-top:-12px;"></span>
  </li>
  <li class="feed-item">
    <time class="date" datetime="9-18">Sep 18</time>
    <span class="text"><font size="4"><b>11:50 AM</b></font>&nbsp;&nbsp;<font color="#DB755C">Oven was closed</font><img src="mutfak/kapali.png" width="40" height="40"  style="float:right;margin-top:-12px;"></span>
  </li>
  <li class="feed-item">
    <time class="date" datetime="9-17">Sep 17</time>
    <span class="text"><font size="4"<b>11:50 AM</b></font>&nbsp;&nbsp;<font color="#51C08A">Fridge was closed</font><img src="mutfak/acik.png" width="40" height="40"  style="float:right;margin-top:-12px;"></span>
  </li>
    <li class="feed-item">
    <time class="date" datetime="9-16">Sep 16</time>
    <span class="text"><font size="4"><b>11:50 AM</b></font>&nbsp;&nbsp;<font color="#DB755C">Toaster was closed</font><img src="mutfak/kapali.png" width="40" height="40"  style="float:right;margin-top:-12px;"></span>
  </li>
</ol>
    
		
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
    
      

    
    
