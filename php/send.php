<?php

header("Content-Type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: IT-Woltu
 * Date: 20.09.2017
 * Time: 11:53
 */
// import the connection file
require "conn.php";

// insert the data to the table
$user_name = $_POST["user_name"];
$user_mes = $_POST["user_mes"];
$send_time = date("Y-m-d H:i:s");
$sql = "INSERT INTO message (user_name, user_mes, send_time)  
VALUES ('$user_name', '$user_mes', '$send_time')";

// check it
$conn->query("set names 'utf8'");
if($conn->query($sql) === true) {
    echo "留言成功";
}else {
    //echo "数据插入失败" . $conn->error;
}
// close the datebase connection
$conn->close();
?>