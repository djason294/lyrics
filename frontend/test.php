<?php
$str = "My text1\nMy text2My text3";
$arr = preg_split("/\r\n|\n|\r/", $str);
var_dump($arr);	
echo $arr[0];
?>