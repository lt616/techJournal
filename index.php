
<html>
<head>
	<title> Technical Journals </title>
	<meta name=""
  	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  	<link rel="stylesheet" href="bootstrap/styles/bootstrap.min.css">
	<script src="bootstrap/scripts/bootstrap.min.js"></script>
	<script src="bootstrap/scripts/jquery-2.1.4.min.js"></script>

	<!-- internal css -->
	<style type="text/css">
			#celebration{
				padding-left: 35px;
				padding-top: 22px;
				color: #000000;
				font-size: 5em;
				background-image: url("source/celebration.jpg");
			};

			.glyphicon{
				font-size: 45px;
			};

			#wish{
				width: 50px;
				height: 50px;
			};

			#journal{
			}

			#journalReview{

			};

			#journalContext{
				display: block;
			};
	</style>

</head>
<body>
	<!-- Navigate bar -->
	<nav class="navbar navbar-default fixed-to-top">
		<div class="container-fuild">
			<div class="navbar-header">
				<h1 class="navbar-text"> Technical Journals </h1>
			</div>
			<div class="navbar-right">
				<h2 class="navbar-text"> AXJLlt <i> loves </i> David very very much :) </h2>
			</div>
		</div>
	</nav>
	<div class="container">
		<!-- Journal review module -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12" id="journal">
				<button class="btn btn-default" type="button" id="backToContext"> Back to context </button>
				<div id="journalReview"></div>
			</div>
		</div>

		<!-- Journal Content -->
		<div class="col-xs-12 col-sm-6 col-md-6" id="journalContext">
			<?php
				$myfile = fopen("journalContext.html", "r") or die("Cannot open file journalContext.html");
				echo "<dl>" . fread($myfile, filesize("journalContext.html")) . "</dl>";
			?>
		</div>

		<div id="homePage">
		<!-- background music -->
		<audio controls class="col-xs-6 col-sm-6 col-md-6" id="backgroundMusic">
			<source src="source/2.mp3" type="audio/mpeg">
			Your browser does not support the audio element
		</audio>

		<div class="col-xs-6 col-sm-6 col-md-6" id="celebration">
			4th Months <br/> Celebrate!
		</div>
		</div>

		

	</div>
</div>

	<script type="text/javascript">
		//document.getElementById("backgroundMusic").loop = true;
		//var secretKey = prompt("Please enter secret key:");
		//if (secretKey != "power monitor") document.getElementsByClassName("container")[0].innerHTML = "Wrong Secret Key~";
		document.getElementById("journal").style.display = "none";

		<!-- // load a journal -->
		$(".journal").click(function() {
			var fileName = this.innerHTML + ".html";
			alert(fileName);
			
			var url = "readFile.php";
			if (window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.open("GET", url + "?FNAME=" + fileName, false);
			xmlhttp.send(null);
			document.getElementById("journal").style.display = "block";
			document.getElementById("journalReview").innerHTML = xmlhttp.responseText;
			document.getElementById("journalContext").style.display = "none";
			document.getElementById("homePage").style.display = "none";
		});

		$("#backToContext").click(function(){
			document.getElementById("journal").style.display = "none";
			document.getElementById("journalContext").style.display = "block";
			document.getElementById("homePage").style.display = "block";
		});
		



	</script>

</body>
</html>