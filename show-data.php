<?php
    header("Content-type: text/html; charset=utf-8");

	  /* 打开文件同时打印文件的每一行,
	  同时去掉取回字符串中的 html 语言
	  */
	  $ip="";
	  $user="";
	  $pwd="";
	  $db="";
    $tab="";
    
    session_start();
    $ip=$_SESSION['thehost'];
    $user=$_SESSION['theuser'];
    $pwd=$_SESSION['thepwd'];
    $db=$_SESSION['thedbname'];
    $tab=$_SESSION['thetab'];

    $con=mysqli_connect($ip,$user,$pwd);
    
    if(!$con){
      echo "<h4>数据库连接失败！<h4>";
    }else{
      echo "数据库连接成功！";
    }

   mysqli_select_db($con,$db);
   mysqli_query($con,"SET NAMES utf8");//解决数据库中有汉字时显示在前台出现乱码问题
   $result = mysqli_query($con,"SELECT * FROM ".$tab);

    echo "<table border='1'>
        <tr>
        <th>id</th>
        <th>store</th>
		<th>item</th>
        <th>quantity</th>
        </tr>";

    while($row = mysqli_fetch_array($result))    //转成数组，且返回第一条数据,当不是一个对象时候退出
    {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['store'] . "</td>";
		echo "<td>" . $row['item'] . "</td>";
        echo "<td>" . $row['quantity'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($con);          //关闭MySQL连接
  
?>