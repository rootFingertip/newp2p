<?php 
    //引入响应头
    include_once('./conn.php');

    //接收数据
    $username = $_POST["username"];
    $password = $_POST["password1"];

    // echo $username;

    //构造sql语句
    $sqlStr="select * from userinfo where username='$username' and password='$password'";

    //执行sql语句
    $rs=mysqli_query($conn, $sqlStr);
    //返回结果给前端
    // mysqli_fetch_assoc(); 返回结果集中行的关联数组，如何没有行的记录返回null
    $row=mysqli_fetch_assoc($rs);

    if($row){
        $jsonArray=["isSuccess"=>true,"msg"=>"登录成功!"];
        echo json_encode($jsonArray); //转换为json格式的字符串，返回给前端

        //验证用户登录成功就创建session
        session_start();
        $_SESSION["username"]=$row["username"];
        $_SESSION["userid"]=$row["userid"];
    }else{
        $jsonArray=["isSuccess"=>false,"msg"=>"登录失败!"];
        echo json_encode($jsonArray); //转换为json格式的字符串，返回给前端  
    }
?>