<?php

	$myfile = fopen("config.ini", "w") or die("Unable to open file!");
	$txt = $_POST["host"]+"\n";
	fwrite($myfile, $txt);
	$txt = $_POST["user"]+"\n";
	fwrite($myfile, $txt);
	$txt = $_POST["pwd"]+"\n";
	fwrite($myfile, $txt);
	$txt = $_POST["dbname"]+"\n";
	fwrite($myfile, $txt);
	fclose($myfile);
?>
