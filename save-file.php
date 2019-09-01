<?php
  //SESSION临时保存RDS信息
  
   $ip=$_POST["thehost"];
   $user=$_POST["theuser"];
   $pwd=$_POST["thepwd"];
   $db=$_POST["thedbname"];
   $tab="inventory".uniqid();
  
  session_start();
  $_SESSION['thehost']=$ip;
  $_SESSION['theuser']=$user;
  $_SESSION['thepwd']=$pwd;
  $_SESSION['thedbname']=$db;
  $_SESSION['thetab']=$tab;
  

    $con=mysqli_connect($ip,$user,$pwd);
    
    if(!$con){
      echo "<h4>数据库连接失败！<h4>";
    }else{
      echo "数据库连接成功！";
     mysqli_select_db($con,$db);
     //mysqli_query($con,"SET NAMES utf8");//解决数据库中有汉字时显示在前台出现乱码问题
     //$result = mysqli_query($con,"SELECT * FROM inventory");


    $createtable="create table ".$tab."(id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,store  varchar(30) NULL,item  varchar(30) NULL,quantity int(3) NULL)";
    if($con->query($createtable)==true){//执行
	      echo "创建表[".$tab."]成功";
        //插入数据
        $insertdata="insert into ".$tab."(store,item,quantity) values('Puerto Rico','Amazon Echo',12)";
        mysqli_query($con, $insertdata);
        $insertdata="insert into ".$tab."(store,item,quantity) values('Paris','Amazon Dot',3)";
        mysqli_query($con, $insertdata);
        $insertdata="insert into ".$tab."(store,item,quantity) values('Detroit','Amazon Tap',5)";
        mysqli_query($con, $insertdata);
    
    }else{
	    echo "Error creating table: " . $con->error;
    }
    
  }

  header('Location: /');
  
?>
