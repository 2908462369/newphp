<?php
header('Content-Type: text/html; charset=utf-8');
$var_name1=678;
$var_name2="a678";
$var_name3="678";
$var_name4="runoob.com";
$var_name5=698.99;
$var_name6=array("a1","a2");
$var_name7=+125689.66;
if (is_numeric($var_name1))
{
    echo "$var_name1 是数字" . PHP_EOL;
}
else
{
    echo "$var_name1 不是数字" . PHP_EOL ;
}
if (is_numeric($var_name2))
{
    echo "$var_name2 是数字" . PHP_EOL ;
}
else
{
    echo "$var_name2 不是数字" . PHP_EOL ;
}
echo '---------------------' . PHP_EOL;
$result=is_numeric($var_name3);
echo "[ $var_name3 是数字吗? ]" .var_dump($result) . PHP_EOL;
echo '---------------------' . PHP_EOL;
$result=is_numeric($var_name4);
echo "[ $var_name4 是数字吗? ]" .var_dump($result) . PHP_EOL;
echo '---------------------' . PHP_EOL;
$result=is_numeric($var_name5);
echo "[ $var_name5 是数字吗? ]" .var_dump($result) . PHP_EOL;
echo '---------------------' . PHP_EOL;
$result=is_numeric($var_name6);
echo "[ $var_name6 是数字吗? ]" .var_dump($result) . PHP_EOL;
echo '---------------------' . PHP_EOL;
$result=is_numeric($var_name7);
echo "[ $var_name7 是数字吗? ]" .var_dump($result);
?>