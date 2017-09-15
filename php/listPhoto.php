
/**
 * Created by PhpStorm.
 * User: IT-Woltu
 * Date: 15.09.2017
 * Time: 17:03
 */
<?php
    $i=0;
    $array[]=null;
    $handle = opendir('./images/'); //当前目录
    while (false !== ($file = readdir($handle))) { //遍历该php文件所在目录


        if (!is_dir('./images/'.$file)) { //文件夹过滤
            $array[]=$file;//把符合条件的文件名存入数组
            $i++;//记录图片总张数
        }

    }
    for ($a=0;$a<$i;$a++){//循环条件控制显示图片张数
        echo "<img width=800 height=600 src=\"$array[$a]\"><br>";//输出图片数组
    }
    ?>