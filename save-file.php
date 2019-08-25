<?php
	$myfile = fopen("config.ini", "w") or die("Unable to open file!");
	fwrite($myfile, $_POST["thehost"]+"\n");
	fwrite($myfile, $_POST["theuser"]+"\n");
	fwrite($myfile, $_POST["thepwd"]+"\n");
	fwrite($myfile, $_POST["thedbname"]+"\n");
	fclose($myfile);
?>
