<?php
	$fileName = $_GET['FNAME'];
	$myfile = fopen($fileName, "r") or die("Unable to open the file" + $fileName);
	echo fread($myfile, filesize($fileName));

	fclose($myfile);			
?>