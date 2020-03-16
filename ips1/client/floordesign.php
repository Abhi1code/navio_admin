<!DOCTYPE html>
<html>
<head>
	<title>chatroom</title>

    <style type="text/css">
      body {
    background-color: ivory;
}
#canvas {
    border: 1px solid red;
     background-image: url("https://matrixfrats.com/download_api/download/upload/59356305578.png");
    background-color: #FFFFFF;
    background-position: center;
    background-size: 100% 100%;
}
    </style>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/3.6.2/fabric.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
</head>
<body>
	<center><h3>Floor Design</h3></center>   
<label class="switch">
  <input type="checkbox" id="check">
  <input type="checkbox" id="check1">
  <input type="text" name="data" id="data" placeholder="Data">
  <button id="locate">Trace location</button>
  <span class="slider round"></span>
</label>
	<div id="user_list"  style="margin: 20px;">
<center><canvas id="canvas" width=500 height=500></canvas></center>
   </div>
   
   <script src="js/socket.js" ></script>
   <script src="js/canvas.js" ></script>
</body>
</html>