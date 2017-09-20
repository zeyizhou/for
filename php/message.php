<!DOCTYPE html>
<?php

require "conn.php";

//设置输出编码
$conn->query("set names 'utf8'");

//读取数据库
$sql = "select * from message order by id desc";
$result = $conn->query($sql);
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>message</title>
      <link rel="stylesheet" type="text/css" href="../css/message.css">
    </head>
    <body>
        <div class="wrap">
            <!-- 留言显示区 -->
            <ul class="mes-board">
                <?php
                if ($result->num_rows > 0) {
                    //逐行输出数据
                    while ($row = $result->fetch_assoc()) {
                        echo "<li><h4>" . $row["user_name"] . "</h4><small>" . $row["send_time"] . "</small><p>" . $row["user_mes"] . "</p></li>";
                    }
                }else {
                    echo "暂无留言";
                }
                ?>
            </ul>

            <section class="mes-send">
                <form method="post" action="send.php">
                    <div class="form-group">
                        <label for="user_name">姓名：</label>
                        <input type="text" id="user_name" name="user_name" placeholder="用户名称">
                    </div>
                    <div class="form-group">
                        <label for="user_mes">留言：</label>
                        <textarea id="user_mes" name="user_mes"></textarea>
                    </div>
                    <input type="submit" value="提 交">
                </form>
            </section>
        </div>
    </body>
</html>

