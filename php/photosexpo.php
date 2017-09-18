
<html lang="en">
<head>
<meta charset="UTF-8">
<title>For You</title>

<link rel="stylesheet" href="../css/shutter.css">
    <link rel="stylesheet" href="../css/dates.css">

</head>
<body>

<div class="shutter">

    <div class="shutter-img">
    <?php
    //define directory
    $dir = "../media/photoWall";
    //open directory
    if ($opendir = opendir($dir)){
    //read directory
        $file=scandir($dir);

        for($i=2;$i<count($file);$i++){
            echo "$file[$i]";
            echo "<a href=\"#\" data-shutter-title=\"$file[$i]\"><img src='$dir/$file[$i]' alt=\"#\" style='z-index: 1;'></a>";
        }
           // echo "<img src='$dir/$file' alt=\"#\">";


    }
   // echo" <a href=\"#\" data-shutter-title=\"The your\"><img src=\"photoWall/IMG_3249.JPG\" alt=\"#\"></a>";

    ?>
    </div>

<ul class="shutter-btn">
  <li class="prev"></li>
  <li class="next"></li>
</ul>
<div class="shutter-desc">
  <p>For You</p>
</div>
</div>

<script src="../js/jquery.min.js"></script>
<script src="../js/velocity.js"></script>
<script src="../js/shutter.js"></script>
<script>
$(function () {
  $('.shutter').shutter({
	shutterW: 1000, // 容器宽度
	shutterH: 600, // 容器高度
	isAutoPlay: true, // 是否自动播放
	playInterval: 2000, // 自动播放时间
	curDisplay: 3, // 当前显示页
	fullPage: false // 是否全屏展示
  });
});
</script>
<div>
    <button id="return" onclick="window.location='../index.php'">返回主页</button>
    <button id="upload" onclick="window.location='../php/uploadPhoto.php'">上传照片</button>
</div>

<div style="text-align:center;clear:both">
<script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
<script src="/follow.js" type="text/javascript"></script>
</div>
</body>
</html>