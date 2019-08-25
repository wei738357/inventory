<?php

	$myfile = fopen("config.ini", "w") or die("Unable to open file!");
	$txt = $_POST["thehost"]+"\n";
	echo $txt;
	fwrite($myfile, $txt);
	$txt = $_POST["theuser"]+"\n";
	echo $txt;
	fwrite($myfile, $txt);
	$txt = $_POST["thepwd"]+"\n";
	echo $txt;
	fwrite($myfile, $txt);
	$txt = $_POST["thedbname"]+"\n";
	echo $txt;
	fwrite($myfile, $txt);
	fclose($myfile);
?>
