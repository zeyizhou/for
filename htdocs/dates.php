<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/dates.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>For You</title>
    <script type="text/javascript">
        var attime;
        function getOffsetDays(time1, time2) {
            var offsetTime = Math.abs(time1 - time2);
            return Math.floor(offsetTime / (3600 * 24 * 1e3));
        }
        //
        var iDay=getOffsetDays(Date.now(), (new Date(2017, 2, 21)).getTime());
        var datesText="我们从在一起到现在已经"+iDay+"天啦！！";
        function clock(){
            var time=new Date();

            attime= time.toLocaleString();
            document.getElementById("clock").innerHTML = "现在是 "+attime;

        }
        setInterval(clock,1000);


    </script>
</head>
<body>
<div>
<img id="zwl" src="../media/image/headshotZWL.JPG" />
<img id="zzy" src="../media/image/headshotZZY.JPG" />
</div>
<div class="dates">
    <div id="clock"  style="text-align: center">

    </div>
    <script>
        document.write(datesText);
    </script>
</div>
<div>
        <button class="photobtn" id="photobutton" onclick="window.location='../php/photosexpo.php'">想看照片点这里</button>
</div>
</body>
</html>