<!DOCTYPE html>



    <html>
<head>
	<meta charset="UTF-8">
	<title>Kitchconn</title>
	
	<link rel="stylesheet" href="css/style5.css">
    <link rel="stylesheet" href="css/kitchenstyle.css">
 <link rel="stylesheet" href="css/reset2.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style6.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
          <script>
function changetogle() {
    var image = document.getElementById('myImage');
	 var image2 = document.getElementById('myImage7');
	console.log(image.src);                               
    console.log(image.src.match("word-not-in-src-name"));  
    console.log(image.src.match("acik"));
	console.log(image2.src);                               
    console.log(image2.src.match("word-not-in-src-name"));  
    console.log(image2.src.match("acik")); 
    if (image.src.match("acik") && image2.src.match("acik") ) {
       image.src = "mutfak/kapali.png";
	   image2.src = "mutfak/kapali.png";
	   $.post("update/db_update.php", $("#console").serialize());
    } else {
		image.src = "mutfak/acik.png";
		image2.src = "mutfak/acik.png";
		$.post("update/db_update2.php", $("#console").serialize());
    }
}

function changetogle2() {
    var image = document.getElementById('myImage2');
	var image2 = document.getElementById('myImage8');
	console.log(image.src);                               
    console.log(image.src.match("word-not-in-src-name"));  
    console.log(image.src.match("acik")); 
	console.log(image2.src);                               
    console.log(image2.src.match("word-not-in-src-name"));  
    console.log(image2.src.match("acik")); 
    if (image.src.match("acik") && image2.src.match("acik")) {
       image.src = "mutfak/kapali.png";
	   image2.src = "mutfak/kapali.png";
	   $.post("update/db_update3.php", $("#console").serialize());
    } else {
		image.src = "mutfak/acik.png";
		image2.src = "mutfak/acik.png";
		$.post("update/db_update4.php", $("#console").serialize());
    }
}

function changetogle3() {
    var image = document.getElementById('myImage3');
	var image2 = document.getElementById('myImage9');
	console.log(image.src);                               
    console.log(image.src.match("word-not-in-src-name"));  
    console.log(image.src.match("acik")); 
	console.log(image2.src);                               
    console.log(image2.src.match("word-not-in-src-name"));  
    console.log(image2.src.match("acik"));
    if (image.src.match("acik") && image2.src.match("acik")) {
       image.src = "mutfak/kapali.png";
	   image2.src = "mutfak/kapali.png";
	   $.post("update/db_update5.php", $("#console").serialize());
    } else {
		image.src = "mutfak/acik.png";
		image2.src = "mutfak/acik.png";
		$.post("update/db_update6.php", $("#console").serialize());
    }
}
function changetogle4() {
    var image = document.getElementById('myImage4');
	var image2 = document.getElementById('myImage10');
	console.log(image.src);                               
    console.log(image.src.match("word-not-in-src-name"));  
    console.log(image.src.match("acik")); 
	console.log(image2.src);                               
    console.log(image2.src.match("word-not-in-src-name"));  
    console.log(image2.src.match("acik"));
    if (image.src.match("acik") && image2.src.match("acik")) {
       image.src = "mutfak/kapali.png";
	   image2.src = "mutfak/kapali.png";
	   $.post("update/db_update7.php", $("#console").serialize());
    } else {
		image.src = "mutfak/acik.png";
		image2.src = "mutfak/acik.png";
		$.post("update/db_update8.php", $("#console").serialize());
    }
}
function changetogle5() {
    var image = document.getElementById('myImage5');
	var image2 = document.getElementById('myImage11');
	console.log(image.src);                               
    console.log(image.src.match("word-not-in-src-name"));  
    console.log(image.src.match("acik"));
	console.log(image2.src);                               
    console.log(image2.src.match("word-not-in-src-name"));  
    console.log(image2.src.match("acik")); 
    if (image.src.match("acik") && image2.src.match("acik")) {
       image.src = "mutfak/kapali.png";
	   image2.src = "mutfak/kapali.png";
	   $.post("update/db_update9.php", $("#console").serialize());
    } else {
		image.src = "mutfak/acik.png";
		image2.src = "mutfak/acik.png";
		$.post("update/db_update10.php", $("#console").serialize());
    }
}
function changetogle6() {
    var image = document.getElementById('myImage6');
		var image2 = document.getElementById('myImage12');
	console.log(image.src);                               
    console.log(image.src.match("word-not-in-src-name"));  
    console.log(image.src.match("acik"));
	console.log(image2.src);                               
    console.log(image2.src.match("word-not-in-src-name"));  
    console.log(image2.src.match("acik"));  
    if (image.src.match("acik")) {
       image.src = "mutfak/kapali.png";
	   image2.src = "mutfak/kapali.png";
	   $.post("update/db_update11.php", $("#console").serialize());
    } else {
		image.src = "mutfak/acik.png";
		image2.src = "mutfak/acik.png";
		$.post("update/db_update12.php", $("#console").serialize());
    }
}
$('input[type="range"]').on('mouseup', function() {
  this.blur();
}).on('mousedown input', function() {
  styl.inject('input[type=range]:focus::-webkit-slider-thumb:after, input[type=range]:focus::-ms-thumb:after, input[type=range]:focus::-moz-range-thumb:after', {content: "'"+this.value+"'"}).apply();
});
function showVal(newVal){
  document.getElementById("deger").innerHTML=newVal;
  var image = document.getElementById('myImage13');
	console.log(image.src);                               
    console.log(image.src.match("word-not-in-src-name")); 
  if (newVal==1){ 
  image.src = "mutfak/acik.png";
    $.post("update/db_update13.php", $("#console").serialize());
  }else
  {
	  image.src = "mutfak/kapali.png";
	  $.post("update/db_update14.php", $("#console").serialize());
	  }
}
</script>



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
            <li class="active ClickMe">
              <a href="#"><i class="Meet">&nbsp;</i>Devices</a>
            
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
           
              <h2 class="left">My Kitchen</h2> 
                
               
               <div class="right bottoms"> 
                
                <div class="bottom yeah">
                 <img src="images2/murat.png" width="100%" height="100%"><br>
                </div>  
                    <div class="username">
                   <h3 class="left">Murat Aşkar</h3>
                   </div>                          
              </div>
              
          </div>
            
  
   

          
     
            <div class="Table_01">
	<div class="newdesign-01">		
	</div>
	<div class="newdesign-02">		
	</div>
	<div class="newdesign-03">
		<a href="#popup8" ><img src="css/images3/newdesign_03.png" width="24" height="24" alt="" ></a>
	</div>
	<div class="newdesign-04">
	</div>
	<div class="newdesign-05">
		<a href="#popup9"><img src="css/images3/newdesign_05.png" width="24" height="24" alt=""></a>
	</div>
	<div class="newdesign-06">
	</div>
	<div class="newdesign-07">
		<a href="#popup10"><img src="css/images3/newdesign_07.png" width="24" height="24" alt=""></a>
	</div>
	<div class="newdesign-08">
	</div>
	<div class="newdesign-09">
		<a href="#popup11"><img src="css/images3/newdesign_09.png" width="24" height="24" alt=""></a>
	</div>
	<div class="newdesign-10">
	</div>
	<div class="newdesign-11">
	</div>
	<div class="newdesign-12">
	</div>
	<div class="newdesign-13">	
	</div>
	<div class="newdesign-14">
	</div>
</div>


 <div class="draggable-droppable">         
            <img  src="mutfak/fridge.png"> 
            <?php 
	$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $conn5 = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS, $DB_NAME);
$results5 = $conn5->query("select user_id,fridge from kitchen_control where user_id='admin'");
while($row = $results5->fetch_array()){
 if($row['fridge']==1){
			echo "<a href='#popup1'> <img class=imgA8 src='mutfak/acik.png' id='myImage7'> </a>";
			 }
			else
			{
			echo "<a href='#popup1'> <img class=imgA8 src='mutfak/kapali.png' id='myImage7'> </a>";
				}}
			mysqli_close($conn5);
			 ?>         
         </div>
        
        <div class="draggable-droppable2">
          <img src="mutfak/microwave.png">
          <?php 
			$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $conn6 = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
$results6 = $conn6->query("select user_id,microwave from kitchen_control where user_id='admin'");
while($row = $results6->fetch_array()){
 if($row['microwave']==1){
	 echo "<a href='#popup2'> <img class=imgA10 src='mutfak/acik.png' id='myImage8'> </a>";
			 }
			else
			{
			echo "<a href='#popup2'> <img class=imgA10 src='mutfak/kapali.png' id='myImage8'> </a>";
				}}
			mysqli_close($conn6);
			 ?>     
        </div>
             
        <div class="draggable-droppable3">
          <img  src="mutfak/toaster.png">
          <?php 
			$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $conn7 = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
$results7 = $conn7->query("select user_id,toaster from kitchen_control where user_id='admin'");
while($row = $results7->fetch_array()){
 if($row['toaster']==1){
	 
           echo "<a href='#popup5'> <img class=imgA12 src='mutfak/acik.png' id='myImage11'> </a>";
			 }
			else
			{
			echo "<a href='#popup5'> <img class=imgA12 src='mutfak/kapali.png' id='myImage11'> </a>";
				}}
			mysqli_close($conn7);
			 ?>  
        </div>
         
        <div class="draggable-droppable4">    
        <img  src="mutfak/dish.png">
        <?php 
			$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $conn8 = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
$results8 = $conn8->query("select user_id,dish from kitchen_control where user_id='admin'");
while($row = $results8->fetch_array()){
 if($row['dish']==1){
	  echo "<a href='#popup3'> <img class=imgA9 src='mutfak/acik.png' id='myImage9'> </a>";
			 }
			else
			{
			echo "<a href='#popup3'> <img class=imgA9 src='mutfak/kapali.png' id='myImage9'> </a>";
				}}
			mysqli_close($conn8);
			 ?>  
        </div>
            
         <div class="draggable-droppable5">  
         <img  src="mutfak/lamp.png">
         <?php 
			$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";
  $conn15= mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
$results15 = $conn15->query("select user_id,lamp from kitchen_control where user_id='admin'");
while($row = $results15->fetch_array()){
 if($row['lamp']==TRUE){
         echo "<a href='#popup7'> <img class=imgA7 src='mutfak/acik.png' id='myImage13'> </a>";
			 }
			else
			{
			echo "<a href='#popup7'> <img class='imgA7' src='mutfak/kapali.png' id='myImage13'> </a>";
				}}
			mysqli_close($conn15);
			 ?>  
        </div>

        <div class="draggable-droppable6">  
        <img  src="mutfak/oven.png">
        <?php 
			$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $conn9 = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
$results9 = $conn9->query("select user_id,oven from kitchen_control where user_id='admin'");
while($row = $results9->fetch_array()){
 if($row['oven']==1){
	 
        echo "<a href='#popup4'> <img class=imgA11 src='mutfak/acik.png' id='myImage10'> </a>";
			 }
			else
			{
			echo "<a href='#popup4'> <img class=imgA11 src='mutfak/kapali.png' id='myImage10'> </a>";
				}}
			mysqli_close($conn9);
			 ?>  
        </div>
        
         <div class="draggable-droppable7">  
        <img  src="mutfak/coffee.png">
        <?php 
			$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $conn2 = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
$results2 = $conn2->query("select user_id,coffee from kitchen_control where user_id='admin'");
while($row = $results2->fetch_array()){
 if($row['coffee']==1){
       echo "<a href='#popup6'> <img class=imgA13 src='mutfak/acik.png' id='myImage12'> </a>";
			 }
			else
			{
			echo "<a href='#popup6'> <img class=imgA13 src='mutfak/kapali.png' id='myImage12'> </a>";
				}}
			mysqli_close($conn2);
			 ?>  
        </div>
     
       
       <script src="js/index3.js"></script>
       
         

 
<?php
	$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $conn = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	 
	 

		$liste=$_POST['check_list'];
	
	 
if(isset($_POST['submit'])){
if(!empty($liste)){
	

 $N = count($liste);       
        for($i=0; $i < $N; $i++)
        {
            $var1=$liste[$i];
			if($liste[$i]=="Fridge"){
				
			echo "<img class=imgA1 src='mutfak/fridge.png'>
<a href='#popup1'><img class=imgA8 src='mutfak/acik.png'></a>";
			}
			elseif($liste[$i]=="Oven")
			{
				
			echo "<img class=imgA4 src='mutfak/oven.png'>
<a href='#popup4'><img class=imgA11 src='mutfak/kapali.png'></a>";
				}
				elseif($liste[$i]=="Lamp")
			{
				
			echo "<img class=imgA7 src='mutfak/lamp.png'>
<a href='#popup7'><img class=imgA14 src='mutfak/acik.png'></a>";
				}
				elseif($liste[$i]=="Dishwasher")
			{
				
			echo "<img class=imgA2 src='mutfak/dish.png'>
<a href='#popup3'><img class=imgA9 src='mutfak/kapali.png'></a>";
				}
				elseif($liste[$i]=="Microwave")
			{
				
			echo "<img class=imgA3 src='mutfak/microwave.png'>
<a href='#popup2'><img class=imgA10 src='mutfak/acik.png'></a>";
				}
				elseif($liste[$i]=="Coffee Machine")
			{
				
			echo "<img class=imgA6 src='mutfak/coffee.png'>
<a href='#popup6'><img class=imgA13 src='mutfak/kapali.png'></a>";
				}
				elseif($liste[$i]=="Toaster")
			{
				
			echo "<img class=imgA5 src='mutfak/toaster.png'>
<a href='#popup5'><img class=imgA12 src='mutfak/acik.png'></a>";
				}				
				
		}
}
else{
		echo "<b>Please Select At least One Option.</b>";
	}
}
	
?>
         

<img class=imgA7 src="" id="lamba">
<img class=imgA14 src="" id="lamba2">
<img class=imgA2 src="" id="bulasık">
<img class=imgA9 src="" id="bulasık2">
<img class=imgA3 src="" id="micro">
<img class=imgA10 src="" id="micro2">
<img class=imgA6 src="" id="kahve">
<img class=imgA13 src="" id="kahve2">

<img class=imgA15 src="" id="tost3">

<img class=imgA16 src="" id="tost2">
<img class=imgA17 src="" id="buzdolabı">
<img class=imgA18 src="" id="buzdolabı2">
          
        <div id="popup1" class="overlay">
	<div class="popup">
		<h2><b><center>Fridge</center></b></h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
        <img src="images2/çizgi.jpg" width="100%" height="100%"><br>		
		</div>
         <center><img src="images2/fridge.jpg" width="150" height="150"></center><br>
         <?php 
			$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";
  $conn3 = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
$results3 = $conn3->query("select user_id,fridge from kitchen_control where user_id='admin'");
while($row = $results3->fetch_array()){
 if($row['fridge']==1){
        echo " <center><img src='mutfak/acik.png' width='50' height='50' onclick='changetogle()' id='myImage'></center><br>";
 }
 else
 {
	 echo " <center><img src='mutfak/kapali.png' width='50' height='50' onclick='changetogle()' id='myImage'></center><br>";
	 }}
 mysqli_close($conn3);
			 ?>  
		 <center><font color="#333" size="3" face="Tahoma, Geneva, sans-serif">Power Now <b>180W</b></font></center>
	</div>
</div>  
   
       <div id="popup2" class="overlay">
	<div class="popup">
		<h2><b><center>Microwave</center></b></h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
        <img src="images2/çizgi.jpg" width="100%" height="100%"><br>		
		</div>
         <center><img src="images2/micro.png" width="170" height="150"></center><br>
          <?php 
			$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";
  $conn4 = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
$results4 = $conn4->query("select user_id,microwave from kitchen_control where user_id='admin'");
while($row = $results4->fetch_array()){
 if($row['microwave']==1){
        echo " <center><img src='mutfak/acik.png' width='50' height='50' onclick='changetogle2()' id='myImage2'></center><br>";
 }
 else
 {
	 echo " <center><img src='mutfak/kapali.png' width='50' height='50' onclick='changetogle2()' id='myImage2'></center><br>";
	 }}
 mysqli_close($conn4);
			 ?>  
         <center><font color="#333" size="3" face="Tahoma, Geneva, sans-serif">Power Now <b>180W</b></font></center>
	</div>
</div>  
  
  <div id="popup3" class="overlay">
	<div class="popup">
		<h2><b><center>Dishwasher</center></b></h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
        <img src="images2/çizgi.jpg" width="100%" height="100%"><br>		
		</div>
         <center><img src="images2/dish.png" width="150" height="150"></center><br>
		 <?php 
			$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $conn10 = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
$results10 = $conn10->query("select user_id,dish from kitchen_control where user_id='admin'");
while($row = $results10->fetch_array()){
 if($row['dish']==1){
        echo " <center><img src='mutfak/acik.png' width='50' height='50' onclick='changetogle3()' id='myImage3'></center><br>";
 }
 else
 {
	 echo " <center><img src='mutfak/kapali.png' width='50' height='50' onclick='changetogle3()' id='myImage3'></center><br>";
	 }}
 mysqli_close($conn10);
			 ?>  
         <center><font color="#333" size="3" face="Tahoma, Geneva, sans-serif">Power Now <b>0W</b></font></center>
	</div>
</div>  
       
       <div id="popup4" class="overlay">
	<div class="popup">
		<h2><b><center>Oven</center></b></h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
        <img src="images2/çizgi.jpg" width="100%" height="100%"><br>		
		</div>
         <center><img src="images2/oven.png" width="150" height="150"></center><br>
         
         <?php 
			$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $conn11 = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
$results11 = $conn11->query("select user_id,oven from kitchen_control where user_id='admin'");
while($row = $results11->fetch_array()){
 if($row['oven']==1){
        echo " <center><img src='mutfak/acik.png' width='50' height='50' onclick='changetogle4()' id='myImage4'></center><br>";
 }
 else
 {
	 echo " <center><img src='mutfak/kapali.png' width='50' height='50' onclick='changetogle4()' id='myImage4'></center><br>";
	 }}
 mysqli_close($conn11);
			 ?>  
         <center><font color="#333" size="3" face="Tahoma, Geneva, sans-serif">Power Now <b>0W</b></font></center>
	</div>
</div>  


 <div id="popup5" class="overlay">
	<div class="popup">
		<h2><b><center>Toaster</center></b></h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
        <img src="images2/çizgi.jpg" width="100%" height="100%"><br>		
		</div>
         <center><img src="images2/toast.jpg" width="150" height="150"></center><br>
         
        <?php 
			$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $conn13 = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
$results13 = $conn13->query("select user_id,toaster from kitchen_control where user_id='admin'");
while($row = $results13->fetch_array()){
 if($row['toaster']==1){
        echo " <center><img src='mutfak/acik.png' width='50' height='50' onclick='changetogle5()' id='myImage5'></center><br>";
 }
 else
 {
	 echo " <center><img src='mutfak/kapali.png' width='50' height='50' onclick='changetogle5()' id='myImage5'></center><br>";
	 }}
 mysqli_close($conn13);
			 ?>  
         <center><font color="#333" size="3" face="Tahoma, Geneva, sans-serif">Power Now <b>180W</b></font></center>
	</div>
</div>  

<div id="popup6" class="overlay">
	<div class="popup">
		<h2><b><center>Coffee Machine</center></b></h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
        <img src="images2/çizgi.jpg" width="100%" height="100%"><br>		
		</div>
         <center><img src="images2/coffee.jpg" width="150" height="150"></center><br>
         
         <?php 
$DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $conn14 = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
$results14 = $conn14->query("select user_id,coffee from kitchen_control where user_id='admin'");
while($row = $results14->fetch_array()){
 if($row['coffee']==1){
        echo " <center><img src='mutfak/acik.png' width='50' height='50' onclick='changetogle6()' id='myImage6'></center><br>";
 }
 else
 {
	 echo " <center><img src='mutfak/kapali.png' width='50' height='50' onclick='changetogle6()' id='myImage6'></center><br>";
	 }}
 mysqli_close($conn14);
?>  
         <center><font color="#333" size="3" face="Tahoma, Geneva, sans-serif">Power Now <b>0W</b></font></center>
	</div>
</div>  

<div id="popup7" class="overlay">
	<div class="popup">
		<h2><b><center>Lamp</center></b></h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
        <img src="images2/çizgi.jpg" width="100%" height="100%">	
		</div>
         <center><img src="images2/lamp.jpg" width="150" height="150"></center><br>
           
                  
                  <?php
                 $DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $conn16 = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
$results16 = $conn16->query("select user_id,lamp from kitchen_control where user_id='admin'");
while($row = $results16->fetch_array()){
                  echo "<img src='mutfak/kapali.png' width='35' height='35'>&nbsp;<input type='range' min='0' max='1' step='1' value='".$row['lamp']."' id='deger' onchange='showVal(this.value)'/>&nbsp;<img src='mutfak/acik.png' width='35' height='35'>";
				   }
 mysqli_close($conn16);
				   ?>            

         <center><font color="#333" size="3" face="Tahoma, Geneva, sans-serif">Power Now <b>180W</b></font></center>
	</div>
</div>   
             
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://rawgit.com/jeffshaver/styl.js/master/src/styl.min.js'></script>
 <?php
                 $DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $conn30 = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
$results30 = $conn30->query("select user_id,gas from kitchen_control where user_id='admin'");
while($row = $results30->fetch_array())
{
	echo"<div id='popup8' class='overlay'>
	<div class='popup'>
		<h2><b><center>Smoke Sensor</center></b></h2>
		<a class='close' href='#'>&times;</a>
		<div class='content'>
        <img src='images2/çizgi.jpg' width='100%' height='100%'><br>		
		</div>
         <center><img src='images2/smoke3.png' width='150' height='150'></center><br>
		  <center><div class='gaslar'><label for='name'>".$row['gas']."</label></div></center>
         <center><img src='images2/ok.png' width='100' height='50' ></center><br>
         
	</div>
</div> "; 
}
mysqli_close($conn30);
?>
<div id="popup9" class="overlay">
	<div class="popup">
		<h2><b><center>Humidity Sensor</center></b></h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
        <img src="images2/çizgi.jpg" width="100%" height="100%"><br>		
		</div>
         <center><img src="images2/humidity.png" width="150" height="150"></center><br>
         <center><img src="images2/ok.png" width="100" height="50"></center><br>
         
	</div>
</div>  
 <?php
                 $DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $conn33 = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
$results33 = $conn33->query("select user_id,temperature from kitchen_control where user_id='admin'");
while($row = $results33->fetch_array())
{
	echo"
<div id='popup10' class='overlay'>
	<div class='popup'>
		<h2><b><center>Temperature Sensor</center></b></h2>
		<a class='close' href='#'>&times;</a>
		<div class='content'>
        <img src='images2/çizgi.jpg' width='100%' height='100%'><br>		
		</div>
         <center><img src='images2/hot.png' width='150' height='150'></center><br>
		  <center><div class='sıcaklar'><label for='name'>".$row['temperature']."</label></div></center>
         <center><img src='images2/ok.png' width='100' height='50'></center><br>
         
	</div>
</div> ";
 }
mysqli_close($conn33);
?>
 <?php
                 $DB_HOST ="";
  $DB_USER ="";
  $DB_PASS ="";
  $DB_NAME ="";

  $conn31 = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
$results31 = $conn31->query("select user_id,fire from kitchen_control where user_id='admin'");
while($row = $results31->fetch_array())
{
echo "<div id='popup11' class='overlay'>
	<div class='popup'>
		<h2><b><center>Gas Sensor</center></b></h2>
		<a class='close' href='#'>&times;</a>
		<div class='content'>
        <img src='images2/çizgi.jpg' width='100%' height='100%'><br>		
		</div>
         <center><img src='images2/gas.png' width='150' height='150'></center><br>
		 <center><div class='firelar'><label for='name'>".$row['fire']."</label></div></center>
         <center><img src='images2/ok.png' width='100' height='50'></center><br>
         
	</div>
</div>  
";
}
mysqli_close($conn31);
?>
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
    
    <script>
function updateimage(){
        if(document.getElementById('resim').value=='Fridge'){
			document.getElementById('buzdolabı').src='mutfak/yenidolap.png';
			document.getElementById('buzdolabı2').src='mutfak/kapali.png';
			}
			if(document.getElementById('resim').value=='Oven'){
			document.getElementById('fırın').src='mutfak/oven.png';
			document.getElementById('fırın2').src='mutfak/kapali.png';
			}
			if(document.getElementById('resim').value=='Lamp'){
			document.getElementById('lamba').src='mutfak/lamp.png';
			document.getElementById('lamba2').src='mutfak/acik.png';
			}
			if(document.getElementById('resim').value=='Dishwasher'){
			document.getElementById('bulasık').src='mutfak/dish.png';
			document.getElementById('bulasık2').src='mutfak/kapali.png';
			}
			if(document.getElementById('resim').value=='Microwave'){
			document.getElementById('micro').src='mutfak/microwave.png';
			document.getElementById('micro2').src='mutfak/acik.png';
			}
			if(document.getElementById('resim').value=='Coffee Machine'){
			document.getElementById('kahve').src='mutfak/coffee.png';
			document.getElementById('kahve2').src='mutfak/kapali.png';
			}
			if(document.getElementById('resim').value=='Toaster'){
			document.getElementById('tost3').src='mutfak/yenitost.png';
			document.getElementById('tost2').src='mutfak/acik.png';
			}
}
</script>
    
   
</body>
</html>
    
      

    
    