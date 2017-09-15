<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>For You</title>

<link rel="stylesheet" href="css/shutter.css">

</head>
<body>

<div class="shutter">
<div class="shutter-img">


  <?php
	$dir = "./for/images/";  //要获取的目录

  //先判断指定的路径是不是一个文件夹
  if (is_dir($dir)){
  if ($dh = opendir($dir)){
  while (($file = readdir($dh))!= false){
  $filePath = $dir.$file;
  echo "<img src='".$filePath."'/>";
  }
  closed($dh);
  }
  }
  ?>
</div>
<ul class="shutter-btn">
  <li class="prev"></li>
  <li class="next"></li>
</ul>
<div class="shutter-desc">
  <p>Iron Man</p>
</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/velocity.js"></script>
<script src="js/shutter.js"></script>
<script>
$(function () {
  $('.shutter').shutter({
	shutterW: 1000, // 容器宽度
	shutterH: 358, // 容器高度
	isAutoPlay: true, // 是否自动播放
	playInterval: 2000, // 自动播放时间
	curDisplay: 3, // 当前显示页
	fullPage: false // 是否全屏展示
  });
});
</script>

<div style="text-align:center;clear:both">
<script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
<script src="/follow.js" type="text/javascript"></script>
</div>
</body>
</html>