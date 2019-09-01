<?php
  //SESSION临时保存RDS信息
  session_start();
  $_SESSION['thehost']=$_POST["thehost"];
  $_SESSION['theuser']=$_POST["theuser"];
  $_SESSION['thepwd']=$_POST["thepwd"];
  $_SESSION['thedbname']=$_POST["thedbname"];
  header('Location: /');
  
?>
