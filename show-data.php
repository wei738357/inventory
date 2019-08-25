<?php
    header("Content-type: text/html; charset=utf-8");


    $con=mysqli_connect('inventory-db.co6jmz46zvqw.ap-northeast-1.rds.amazonaws.com','master','lab-password');
    
    if(!$con){
    die('connect failed!');
    }else{
    echo "连接成功！";
    }

   mysqli_select_db($con,"inventory");
   mysqli_query($con,"SET NAMES utf8");//解决数据库中有汉字时显示在前台出现乱码问题
   $result = mysqli_query($con,"SELECT * FROM inventory");

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

    mysqli_close($con);          // 关闭 MySQL 连接。
  
?>
