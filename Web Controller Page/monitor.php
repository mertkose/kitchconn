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
          
<style>
     
      #webglviewer {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 120px;
        z-index: 100;
      }
    </style>
<script>
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#blah')
        .attr('src', e.target.result)
        .width(100)
        .height(100);
    };
    reader.readAsDataURL(input.files[0]);
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
            <li class="ClickMe">
              <a href="listcontrol.php"><i class="Meet">&nbsp;</i>Devices</a>
            
            </li>
            <li class="ClickMe"><a href="message.php"><i class="Messages">&nbsp;</i>Messages <span>2</span></a></li>
            <li class="active ClickMe"><a href="monitor.php"><i class="FeaturedM">&nbsp;</i>Monitor</a></li>
            <li class="ClickMe"><a href="statistic.php"><i class="AnonymousQ">&nbsp;</i>Statistics</a></li>
            <li class="ClickMe"><a href="#"><i class="ProfileP">&nbsp;</i>Scenario</a></li>
            <li class="ClickMe"><a href="#"><i class="Rating">&nbsp;</i>Logout</a></li>
          </ul>
        </div>

        <div class="profile clearfix">          
            <div class="header clearfix">
           
              <h2 class="left">Monitor</h2> 
                
               
               <div class="right bottoms"> 
                
                <div class="bottom yeah">
                
                 <img src="images2/murat.png" width="100%" height="100%">
                 <br>
                </div>  
                    <div class="username">
                   <h3 class="left">Murat Aşkar</h3>
                   </div>                          
              </div>
                
          </div>
          <div id="webglviewer"></div>
    <canvas id="tempCanvas"></canvas>

    <script src="./js/three.min.js"></script>
    <script src="./js/StereoEffect.js"></script>

    <script>
      var scene,
          camera, 
          renderer,
          element,
          container,
          effect,
          canvas,
          context;
      init();
      function init() {
        scene = new THREE.Scene();
        camera = new THREE.PerspectiveCamera(90, window.innerWidth / window.innerHeight, 0.001, 700);
        camera.position.set(0, 15, 0);
        scene.add(camera);
        renderer = new THREE.WebGLRenderer();
        element = renderer.domElement;
        container = document.getElementById('webglviewer');
        container.appendChild(element);
        effect = new THREE.StereoEffect(renderer);
        element.addEventListener('click', fullscreen, false);
        canvas = document.getElementById('tempCanvas');
        canvas.width = 512;
        canvas.height = 288;
        canvas.width = nextPowerOf2(canvas.width);
        canvas.height = nextPowerOf2(canvas.height);
        function nextPowerOf2(x) { 
            return Math.pow(2, Math.ceil(Math.log(x) / Math.log(2)));
        }
        context = canvas.getContext('2d');
        texture = new THREE.Texture(canvas);
        texture.context = context;
        var cameraPlane = new THREE.PlaneGeometry(512, 512);
        cameraMesh = new THREE.Mesh(cameraPlane, new THREE.MeshBasicMaterial({
          color: 0xffffff, opacity: 1, map: texture
        }));
        cameraMesh.position.z = -200;
        scene.add(cameraMesh);
        animate();
      }
      function animate() {
        if (context) {
          var piImage = new Image();
          piImage.onload = function() {
            console.log('Drawing image');
            context.drawImage(piImage, 0, 0, canvas.width, canvas.height);
            texture.needsUpdate = true;
          }
          piImage.src = "http://192.168.0.12/picam/cam_pic.php?time=" + new Date().getTime();
        }
        requestAnimationFrame(animate);
        update();
        render();
      }
      function resize() {
        var width = container.offsetWidth;
        var height = container.offsetHeight;
        camera.aspect = width / height;
        camera.updateProjectionMatrix();
        renderer.setSize(width, height);
        effect.setSize(width, height);
      }
      function update(dt) {
        resize();
        camera.updateProjectionMatrix();
      }
      function render(dt) {
        effect.render(scene, camera);
      }
      function fullscreen() {
        if (container.requestFullscreen) {
          container.requestFullscreen();
        } else if (container.msRequestFullscreen) {
          container.msRequestFullscreen();
        } else if (container.mozRequestFullScreen) {
          container.mozRequestFullScreen();
        } else if (container.webkitRequestFullscreen) {
          container.webkitRequestFullscreen();
        }
      }
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
    
      

    
    
