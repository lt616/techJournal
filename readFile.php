<?php
	$myfile = fopen("28-01-2016.html", "r") or die("Unable to open the file" + $fileName);
	echo fread($myfile, filesize("28-01-2016.html"));
	fclose($myfile);			
?>