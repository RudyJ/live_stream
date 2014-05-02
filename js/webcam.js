if(navigator.webkitGetUserMedia!=null) { 
	var options = { 
        video:true, 
        audio:true 
    };
	
	navigator.webkitGetUserMedia(options, 
        function(stream) { 
            var video = document.querySelector('video'); 
            video.src = window.webkitURL.createObjectURL(stream); 
        }, 
        function(e) { 
			alert("Você precisa Permitir o acesso a Webcam nesta página !");
            console.log("Há algum problem com a webkitGetUserMedia"); 
        } 
    );  
		
}

