<?php

	$myfile = fopen("config.ini", "w") or die("Unable to open file!");
	$txt = $_REQUEST["host"]+"\n";
	echo $txt;
	fwrite($myfile, $txt);
	$txt = $_REQUEST["user"]+"\n";
	echo $txt;
	fwrite($myfile, $txt);
	$txt = $_REQUEST["pwd"]+"\n";
	echo $txt;
	fwrite($myfile, $txt);
	$txt = $_REQUEST["dbname"]+"\n";
	echo $txt;
	fwrite($myfile, $txt);
	fclose($myfile);
?>
