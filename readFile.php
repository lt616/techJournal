<?php
	$fileName = $_GET['FNAME'];
	echo $fileName;
	//$myfile = fopen($fileName, "r") or die("Unable to open the file" + $fileName);
	//echo fread($myfile, filesize($fileName));

	fclose($myfile);			
?>