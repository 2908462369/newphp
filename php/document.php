<?php
header('Content-Type: text/html; charset=utf-8');
//使用php执行操作系统
$result = `net stop AppReadiness`;
$result = iconv("GBK","UTF-8",$result);
echo $result;
?>