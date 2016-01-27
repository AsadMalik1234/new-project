<!DOCTYPE html>
<html>
	<head>
		<!--The bootspray template was taking online
		https://github.com/SamCogan/bootstrap1 -->
		
		<title>SoccerArmy</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="Project/css/bootstrap.min.css" />
		<link rel="stylesheet" href="Project/css/style.css" />
		
		<!-- Javascript and css link to for the javascript slide -->
		<!--	http://www.menucool.com/javascript-image-slider -->
		<link href="Project/themes/8/js-image-slider.css" rel="stylesheet" type="text/css" />
		<script src="Project/themes/8/js-image-slider.js" type="text/javascript"></script>
		<link href="Project/themes/8/tooltip.css" rel="stylesheet" type="text/css" />
		
		
		



	</head>
	<body id="Home">
	<div class="navbar-static-top navbar-inverse" id="home" style="position: fixed; width:100%;">
		<div class="container">
			<div class="navbar-brand">
				<img src="Project/images/wadlogo.png"/>
			</div>
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				Menu
			</button>
			<div class="collapse navbar-collapse navHeaderCollapse">
				<h4 class="nav navbar-nav navbar-right">
					<li><a href="#Home">Home</a></li>
					<li><a href="#players">Players</a></li>
					<li><a href="#review">Review</a></li>
					<li><a href="#fixtures">Fixtures</a></li>
					<li><a href="#contact">RSS/Feedback</a></li>
				</h4>
			</div>
		</div>
	</div> 
	

	
		<br />
		<br />
		
			<!--Parts of the following code were sourced from menucool
			http://www.menucool.com/javascript-image-slider -->
	<div class="jumbotron">
	<div id="sliderFrame">
        <div id="slider">
            <img src="Project/images/cronaldo.jpg" alt="#cap1" />
            <img src="Project/images/rooney.jpg" alt="#cap2" />
            <img src="Project/images/azeez.jpg" alt="#cap3" />
            <img src="Project/images/neymar.jpg" alt="#cap4" />
            <img src="Project/images/SERGIO.jpg" alt="#cap5" />
        </div>
        <div style="display: none;">
            <div id="cap5">
                 See more at <a href="http://www.realmadrid.com/en">Real Madrid's site</a>.
            </div>
            <div id="cap2">
                 See more at <a href="http://www.manchesterunited.com/en">Man Utd's site</a>.
            </div>
			<div id="cap4">
                 See more at <a href="http://www.fcbarcelona.com"/>Barcelona's site</a>.
            </div>
			<div id="cap1">
                 See more at <a href="http://www.realmadrid.com/en">Ronaldo.com</a>.
            </div>
            <div id="cap3">
                 See more at <a href="http://www.shamrockrovers.ie/">Shamrock Rovers site</a>.
            </div>
        </div>
        
    </div>
		<div class="container">
				<div class="alt5">
			<br />
			<h1 class="headz">Welcome to SoccerArmy</h1>
			<p>We're here to keep you up to date with all the</p>
			<p>latest news in football and give you all the info you need</p>
			<p>We hope you enjoy</p>
			<p>Remember to leave feedback!</p>
			<br />
			<p><a href="#contact" target="" class="btn btn-primary btn-lg" style="color:white;">Take me to the feedback form</a></p>
			</div>
		</div>
	</div>
	
	
		
	<div class=" padding" id="players">
		<br />
	<div class="container">
		<h1 style="background-color:#6092CF;margin-left:30px;color: white; border-radius: 20px; text-align:center;">Soccer Players</h1>
	
	
	<!--Parts of the following code were sourced from runnable
		http://code.runnable.com/UnDUlCvY6jFuAACr/how-to-transform-xsl-to-xml-using-php-for-xslt -->
			<?php
			
			// Load the XML source
			$xml = new DOMDocument;
			$xml->load('index.xml');
			
			$xsl = new DOMDocument;
			$xsl->load('index.xsl');
			
			// Configure the transformer
			$proc = new XSLTProcessor;
			$proc->importStyleSheet($xsl); // attach the xsl rules
			
			echo $proc->transformToXML($xml);
			
			?>
			<br />
				<br />
					<div class="row padding" id="three">
			<div class="col-md-12" style="text-align:center;">
				<br/><br/><button  type="button" onclick="loadDoc()">View Manchester United Player Details</button>
			<table id="demo" style="text-align:center;"></table>
			<!--
			Parts of the following code were sourced from W3Schools
			URL: http://www.w3schools.com/xml/xml_applications.asp -->
			<script>

function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      myFunction(xhttp);
    }
  };
  xhttp.open("GET","index.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Name</th><td>&nbsp;</td><th>Position</th><td>&nbsp;</td><th>Number</th><td>&nbsp;</td><th>Age</th><td>&nbsp;</td><th>Nationality</th></tr>";
  var x = xmlDoc.getElementsByTagName("player");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +
    "</td><td>&nbsp;</td><td>" +
    x[i].getElementsByTagName("position")[0].childNodes[0].nodeValue +
    "</td><td>&nbsp;</td><td>" +
     x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue +
    "</td><td>&nbsp;</td><td>" +
     x[i].getElementsByTagName("age")[0].childNodes[0].nodeValue +
    "</td><td>&nbsp;</td><td>" +
     x[i].getElementsByTagName("nationality")[0].childNodes[0].nodeValue +
    "</td><td>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>
	</div>
	</div>
	
<hr />
	<div class="container">
		<div class="row">
			<h1 style="background-color:#6092CF;margin-left:30px;color: white; border-radius: 20px; text-align:center;">Sports News</h1>
			<div class="col-md-4">
				<h2 class="text-center">Athletics</h2>
				<p class="text-justify">Oscar Pistorius is to appeal to South Africa's highest court after he was convicted of his girlfriend's murder. </p>
				<img src="Project/images/oscar.jpg" class="img-circle img-responsive" alt="Circular holding image"/>
				<h1  style="text-align:center;">
				<a href="http://www.skysports.com/more-sports/athletics/news/29172/10092938/oscar-pistorius-to-appeal-murder-conviction-at-constitutional-court" class="btn btn-default" target="_blank">Tell me more..</a>
				</h1>
			</div>
			<div class="col-md-4">
				<h2 class="text-center">Football</h2>
				<p class="text-justify">Lukaku proud of milestone</p><br/><br/>
				<img src="Project/images/l.jpg" class="img-circle img-responsive" alt="Circular holding image"/>
				<h1  style="text-align:center;">
				<a href="http://www.skysports.com/football/news/11671/10092969/romelu-lukaku-happy-to-have-rescued-point-for-everton-against-crystal-palace" class="btn btn-default" target="_blank">Tell me more..</a>
				</h1>
			</div>
			<div class="col-md-4">
				<h2 class="text-center">Football</h2>
				<p class="text-justify">Sir Alex: Leicester can win title</p><br/><br/>
				<img src="Project/images/jamie.jpg" class="img-circle img-responsive" alt="Circular holding image"/>
				<h1  style="text-align:center;">
				<a href="http://www.skysports.com/football/news/11712/10092532/sir-alex-ferguson-says-leicester-city-can-win-the-premier-league" class="btn btn-default" target="_blank">Tell me more..</a>
				</h1>
			</div>
		
		</div>
	</div>	
	</div>
		</div>
	
	<div class="container" id="review">
		<br />
		<div class="row padding" id="one">
			<div class="col-md-12">
				<form action="indexuser.php" method="post">
									<h1 style="background-color:#6092CF;margin-left:30px;color: white; border-radius: 20px; text-align:center;">Add a Player Review</h1>
				 <div style="text-align:center;">
				 	<br />
				<label>
				<span>Your Best Player:</span><input type="text" name="player"><br>
				</label>
				<br /><br />
				  <label>
				<span>Teams:</span><input type="text" name="team"><br>
				</label>
				<br /><br />
				 <label>
				<span>Rating out of 10:</span><input type="text" name="rating"><br>
				</label>
				<br /><br />
				 <label>
				<span>Description the player in your own words:</span><input type="text" name="description"><br>
				</label>
				<br /><br />

<input type="submit">



</form>




</div>
			</div>
		</div>
		
		<hr />
		
		
		<div  class="alt4 col-md-12" id="fixtures">
			<br />
			<h1 style="background-color:#6092CF;margin-left:30px;color: white; border-radius: 20px; text-align:center;">Fixtures</h1>
			<br/>
			
					<?php
			
			// Load the XML source
			$xml = new DOMDocument;
			$xml->load('fixtures.xml');
			
			$xsl = new DOMDocument;
			$xsl->load('fixtures.xsl');
			
			// Configure the transformer
			$proc = new XSLTProcessor;
			$proc->importStyleSheet($xsl); // attach the xsl rules
			
			echo $proc->transformToXML($xml);
			
			?>
		</div>	
	<br />
		<br />
		<hr />
	
		
<br><br>

			</div>
			</div>
		<hr />
	</div>


	<div class="container padding"  id="contact">
		<div class="col-md-12">
			<?php
		// Load the XML source
			$xml = new DOMDocument;
			$xml->load('rss.xml');
			
			$xsl = new DOMDocument;
			$xsl->load('rss.xsl');
			
			// Configure the transformer
			$proc = new XSLTProcessor;
			$proc->importStyleSheet($xsl); // attach the xsl rules
			
			echo $proc->transformToXML($xml);
			
			?>
	
			</div>
		</div>
	

	<br />
	
	
	
	
	
	<div class="container padding" id="contact">
		
		

		<h1 style="background-color:#6092CF;margin-left:30px;color: white; border-radius: 20px; text-align:center;">Feedback</h1>
		<br />
		<form role="form" method="post">
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="example@example.com"/>
			</div>
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Your name here"/>
			
			</div>
			<div class="form-group">
				<label for="message">Feedback:</label>
				<textarea class="form-control" name="feedback" id="message" placeholder="Your message here"></textarea>
			</div>
			<button type="submit" class="btn btn-default" name="submit" value="Submit">Submit</button>
			

		</form>
		
		
		
		
		<?php

    //Connect to the database
    if(isset($_POST["submit"])){
    $host = "127.0.0.1";
    $user = "x14715335";                     //Your Cloud 9 username
    $pass = "";                                 //Remember, there is NO password by default!
    $db = "project";                          //Your database name you want to connect to
    $port = 3306;                               //The port #. It is always 3306

    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    
	if ($connection->connect_error) {
	die("Connection failed: " . $connection->connect_error);
	}
    //And now to perform a simple query to make sure it's working
   $sql = "INSERT INTO suggestions (email,name,feedback) VALUES('".$_POST[email]."','".$_POST[name]."','".$_POST[feedback]."')";
   $connection->query($sql);
    
   $connection->close();
}
?>
	</div>
	
	<div class="alt2">
		<div class="container">
			<footer>
				<?php
			//	&copy; Sam Cogan <br />
				echo "Copyright &copy;  2015 - " . date("Y") . " AAA";
				?>
				<p> <a href="#home">Back to top</a> </p>
			</footer>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="Project/js/bootstrap.js"></script>
	<script>
	$(function() {
  $('a[href*=#]:not([href=#home])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
	</script>
	</body>
</html>