<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>InnoStream</title>
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="js/jquery.webcam.min.js"></script>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header><p>Inno<sub>Stream</sub></p></header>
<div id="conteudo">
<video autoplay></video>
	
    <script>
    	JQuery("#webcam").webcam({
			width: 320,
			height: 240,
			mode: "callback",
			swffile: "jscam.swf",
			});
    </script>

<form><input type="button" id="capture" value="Smile"></form>
<canvas id="canvas" width="300" height="300"></canvas>
<script>
	document.getElementById("capture").onclick = function(){
		var video = document.querySelector("video");
		var canvas = document.getElementById("canvas");
		var ctx = canvas.getContext("2d");
		ctx.drawImage(video,0,0,300,250);
		
		var data = ctx.getImageData(0,0,canvas.width,canvas.height);
			for(n=0; n<data.width*data.height; n++){
				var index = n*4;
				
				data.data[index+0] = 255-data.data[index+0];  
				data.data[index+1] = 255-data.data[index+1];  
				data.data[index+2] = 255-data.data[index+2];
				
				}
		ctx.putImageData(data,0,0);
		
		}
</script>
<script src="js/webcam.js"></script>
</div>
</body>
</html>