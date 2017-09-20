<?php

/**
 * Created by PhpStorm.
 * User: IT-Woltu
 * Date: 20.09.2017
 * Time: 11:55
 */

$dbopts = parse_url(getenv('DATABASE_URL'));
$app->register(new Herrera\Pdo\PdoServiceProvider(),
    array(
        'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"] . ';port=' . $dbopts["port"],
        'pdo.username' => $dbopts["user"],
        'pdo.password' => $dbopts["pass"]
    )
);

$servername =$dbopts["host"];
$username = $dbopts["user"];
$password = $dbopts["pass"];
echo "shdaid ";
$db = ltrim($dbopts["path"],'/');
// create the connection
$conn = mysqli_connect($servername, $username, $password);
echo "'abc'.$servername $username, $password";
// check the connection
if ($conn->connect_error) {
    die("连接失败：afd a" . $conn->connect_error);
}
//echo "连接成功";

mysqli_select_db($conn,$db);
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