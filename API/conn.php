<?php
   //响应头
   header("Content-Type:text/html;charset=utf-8");
   
   //数据库连接
   $conn=mysqli_connect("localhost", "root", "root", "p2p", 3306) or die("数据库连接失败!");
?>