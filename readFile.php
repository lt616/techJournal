<?php
	$fileName = $_POST['FNAME'];
	$myfile = fopen($fileName, "r") or die("Unable to open the file" + $fileName);
	echo $fileName;
	echo fread($myfile, filesize($fileName));

	fclose($myfile);			
?>