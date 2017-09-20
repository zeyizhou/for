<html>
<head>
    <title>For You</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="./css/breadcrumb.css" >

    <link rel="stylesheet" type="text/css" href="./css/button.css" >

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/reset.min.css">
    <style>


        body {
            /* FF3.6-15 */
            background: -webkit-linear-gradient(top, #080d28 0%, #261300 100%);
            /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to bottom, #080d28 0%, #261300 100%);
            /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        }
    </style>




</head>

<body>
<?php
    include_once ("./php/breadcrumb.php");
?>


<canvas id="canvas">Canvas is not supported in your browser</canvas>
<script src='js/dat.gui.min.js'></script>

<script  src="js/rain.js"></script>
    <div class="text">惊不惊喜？意不意外？</div>
    <div class="btnindex">
         <button id="yes" onclick="window.location='htdocs/dates.php'">惊喜</button>
         <button  id="no" onclick="alert('竟然敢点不？再给你次机会。')">才不</button>
    </div>
</body>
</html>