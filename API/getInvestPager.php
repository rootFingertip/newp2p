<?php
   //1. 引入公共连接配置
   include_once("./conn.php");
   
   //2. 接收数据
   $pageIndex=$_GET["pageIndex"];
   $pageSize=$_GET["pageSize"];
   
   $skipNun=$pageIndex*$pageSize;
   
   //3. 构造sql语句 全部查询
   $sqlStr="select * from borrowinfo";
   
   //3. 执行sql语句返回结果集（记录集）
   $rsAll=mysqli_query($conn, $sqlStr);
   
   //获取总的记录数
   $totalCount=mysqli_num_rows($rsAll);
   
   $sqlStr.=" limit $skipNun, $pageSize";
   $rs=mysqli_query($conn, $sqlStr);
   
   //4. 返回前端的数据的二维数组
   $dataJson=[];
   
   //5. 根据执行的结果返回json到前端
   //如何没有行的记录返回null
   while($row=mysqli_fetch_assoc($rs)){
   	   array_push($dataJson,$row);
   }
  
   //把二维数组转换为一个对象数组返回给前端
    $result=["total" => $totalCount,"list" => $dataJson];
   echo json_encode($result);
?>