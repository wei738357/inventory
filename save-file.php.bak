<?php

	$myfile = fopen("config.ini", "w") or die("Unable to open file!");
	$txt = stripslashes($_POST["thehost"])+"\n";
	echo $txt;
	fwrite($myfile, $txt);
	$txt = stripslashes($_POST["theuser"])+"\n";
	echo $txt;
	fwrite($myfile, $txt);
	$txt = stripslashes($_POST["thepwd"])+"\n";
	echo $txt;
	fwrite($myfile, $txt);
	$txt = stripslashes($_POST["thedbname"])+"\n";
	echo $txt;
	fwrite($myfile, $txt);
	fclose($myfile);
?>
