<?php
	$txt=""; 
	$myfile = fopen("config.ini", "w") or die("Unable to open file!");
	$txt = $_POST["thehost"]+"\n";
	echo $_POST["thehost"];
	fwrite($myfile, $txt);
	$txt = $_POST["theuser"]+"\n";
	echo $_POST["theuser"];
	fwrite($myfile, $txt);
	$txt = $_POST["thepwd"]+"\n";
	echo $_POST["thepwd"];
	fwrite($myfile, $txt);
	$txt = $_POST["thedbname"]+"\n";
	echo $_POST["thedbname"];
	fwrite($myfile, $txt);
	fclose($myfile);
?>
