<?php

/**
 * Created by PhpStorm.
 * User: IT-Woltu
 * Date: 20.09.2017
 * Time: 11:55
 */

$servername = "ec2-184-73-189-221.compute-1.amazonaws.com";
$username = "nyvbstimqtrpoz";
$password = "5aad4f541bcf128b912538bc7b3c31f0d47b83799f4118e7ceceaa34e316b74f";

// create the connection
$conn = new mysqli($servername, $username, $password);

// check the connection
if ($conn->connect_error) {
    die("连接失败：" . $conn->connect_error);
}
//echo "连接成功";
$sql = "CREATE DATABASE messageboard1 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
if ($conn->query($sql) === true) {
    //echo "数据库创建成功";
}else {
    //echo "数据库创建失败" . $conn->connect_error;
}
mysqli_select_db($conn,"messageboard1");
$sql = "CREATE TABLE IF NOT EXISTS message (  
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
    user_name VARCHAR(30) NOT NULL,  
    user_mes TEXT NOT NULL,  
    send_time TIMESTAMP  
)";
if ($conn->query($sql) === true) {
    //echo "数据表messageboard创建成功";
}else {
    //echo "数据表创建失败" . $conn->connect_error;
}



?>