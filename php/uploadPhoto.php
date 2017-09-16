
<html>
<head>
    <title>照片上传页</title>
    <link rel="stylesheet" type="text/css" href="../css/uploadPhoto.css" />
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
    <table border=0 cellspacing=0 cellpadding=0 align=center width="100%">
        <tr>
            <td width=55 height=20 align="center">&nbsp;</TD>
            <td height="16">

                <table width="48%" height="93" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>文件： </td>
                        <td><label>
                                <input name="file" type="file" value="浏览" >
                                <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                            </label></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" value="上 传" name="upload"></td>
                    </tr>
                </table></td>
        </tr>
    </table>
</form>

<div>
    <button id="backhome" onclick="window.location='../index.html'">点这里回到首页</button>
    <button id="backphoto" onclick="window.location='photosexpo.php'">点这里到照片墙</button>
</div>

</body>
</html>
<?php
if($_FILES['file']['name']){
    $path = '../media/photoWall/';
    $url = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $b = move_uploaded_file($url, $path.$name);
    if($b && is_file('../media/photoWall/'.$name))echo '文件上传成功';
    else echo 'alert(\"啊哦，失败了，再来一次\")';
}


?>