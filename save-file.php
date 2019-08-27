<?php
	$myfile = fopen("config.ini", "w") or die("Unable to open file!");

	$txt = $_POST["thehost"]."\n";
	fwrite($myfile, $txt);
	$txt = $_POST["theuser"]."\n";
	fwrite($myfile, $txt);
	$txt = $_POST["thepwd"]."\n";
	fwrite($myfile, $txt);
	$txt = $_POST["thedbname"]."\n";
	fwrite($myfile, $txt);

	fclose($myfile);

	header('Location: show-data.php');
?>
