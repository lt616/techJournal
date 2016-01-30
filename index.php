
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
				width: 500px;
				height: 300px;
				float: right;
				padding-left: 35px;
				padding-top: 22px;
				color: #000000;
				font-size: 5em;
				background-image: url("source/celebration.jpg");
			};

			.glyphicon{
				font-size: 45px;
			}

			#wish{
				width: 50px;
				height: 50px;
			}
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
			<div class="col-xs-12" id="journalReview">

			</div>
		</div>	


		<!-- background music -->
		<audio controls id="backgroundMusic">
			<source src="source/2.mp3" type="audio/mpeg">
			Your browser does not support the audio element
		</audio>

		<div id="celebration">
			4th Months <br/> Celebrate!
		</div>

		<!-- Journal Content -->
		<dl>
			<dt> <a href="25-01-2016.html"> 25-01-2016 </a> </dt>
			<dd> Java - Sychronized arguments </dd>
			<dd> Java - Generate random number </dd>
			<dd> Apache - Set up home site on web host </dd>

			<dt> <a href="http://www.arubystory.com/p/tutorials.html"> 26-01-2016 </a> </dt>
			<dd> find a great tutorial for ruby on rails  </dd>

			<dt> <a href="27-01-2016.html"> 27-01-2016 </a> </dt>
			<dd> JAVA - Read/write a .csv file </dd>

			<dt> <a class="journal" id="28-01-2016">28-01-2016</a> </dt>
			<dd> STPF - Upload file to remote server </dd>
			<dd> Bootstrap - Reference bootstrap </dd>
		</dl>

		<div id="wish">
			<span class="glyphicon glyphicon-heart" aria-hidden="true"> </span>
		</div>

	</div>
</div>

	<script type="text/javascript">
		//document.getElementById("backgroundMusic").loop = true;
		//var secretKey = prompt("Please enter secret key:");
		//if (secretKey != "power monitor") document.getElementsByClassName("container")[0].innerHTML = "Wrong Secret Key~";

		<!-- //load a journal -->
		$(".journal").click(function() {
			var fileName = this.innerHTML + ".html";
			alert(fileName);
			//alert(PHP_FUNCTION.readFile(fileName));
		});



	</script>

	<?php
		echo "what";
		function test()
		{
			$user_id = 1;
			echo "what";
		}
	?>
</body>
</html>