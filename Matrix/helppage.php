<!DOCTYPE HTML>

<html>
	<div id = "imgGallery" class = "container">
		<img src = "./images/image1">
		<img src = "./images/image2">
		<img src = "./images/image3">
		<img src = "./images/image4">
		<img src = "./images/image5">
	</div>
    <head>
        <title>Help Page</title>
        <link rel = "stylesheet" type = "text/css" href = "helppage.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway|Rokkitt" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
    </head>

    <body>
        <div id = 'nav'>
            <ul class="navigation">
    	<li>
    		<a href = "index.php" >Home</a>
    		<p>Welcome to the Matrix</p>
    	</li>
    	<li>
    		<a href = "#" >Lessons</a>
    		<p>Watch/Code/Learn</p>
    	</li>
    	<li>
    		<a href = "#" >About</a>
    		<p>Who we are</p>
    	</li>
    	<li>
    		<a href = "#">Feedback</a>
    		<p>Help us improve</p>
    	</li>
    </ul>
        </div>
        <div id = "hello">
            <h1>Hello</h1>
        </div>
            <p id = "t">Need help?Contact us by filling the form below!</p>
            <br>
            <form id = "registerform" method = "POST" action = "help.php">
                <fieldset>
                    <h2 class = "fs-title">Write your queries here</h2>
                    <input type = 'text' name = "name" placeholder="Enter your name"/><br>
                    <input type = "email" name = "email" placeholder= "Enter your email"/>
                    <br>
                    <textarea name = "query" placeholder="Enter your queries"></textarea>
                    <input type = 'submit' name = 'submit' class = 'next action-button' value = 'Submit Query'/>
                </fieldset>
            </form>
            </div>
        </div>

    </body>
	
	<script>
		(function(){
			var imgLen = document.getElementById('imgGallary');
			var images = imgLen.getElementByTagName('img');
			var counter = 1; 
			if(counter <= images.length){
					setInterval(function(){
							images[0].src = images[counter].src;
							console.log(images[counter].src);
							counter ++ ; 
							if(counter == images.length){
									counter = 1;
							}
					},4000);
			}
			
		})();
	
	</script>



</html>
