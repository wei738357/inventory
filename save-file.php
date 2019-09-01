<?php
	/*
  $myfile = fopen("config", "w") or die("Unable to open file!");

	$txt = ."\n";
	fwrite($myfile, $txt);
	$txt = $_POST["theuser"]."\n";
	fwrite($myfile, $txt);
	$txt = $_POST["thepwd"]."\n";
	fwrite($myfile, $txt);
	$txt = $_POST["thedbname"]."\n";
	fwrite($myfile, $txt);

	fclose($myfile);

	header('Location: /');
  */
  
  //SESSION临时保存RDS信息
  session_start();
  $_SESSION['thehost']=$_POST["thehost"];
  $_SESSION['theuser']=$_POST["theuser"];
  $_SESSION['thepwd']=$_POST["thepwd"];
  $_SESSION['thedbname']=$_POST["thedbname"];
?>
