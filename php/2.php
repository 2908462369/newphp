<?php
header('Content-Type: text/html; charset=utf-8');
echo"我是你爹<br/>";
echo"我是你二爹,<br>";
$addr="我是你爹<br>";
echo"你是谁？<br>$addr";
$result=`ipconfig`;
$result=iconv("GBK","utf-8",$result);
echo $result;
if(!('100'===100)){
    echo'xiangdeng';
}
echo '0 == false: ';
var_dump(0 == false);
$a= <<<EOF
        "abc"$name
        "123"
EOF;
// 不区分大小写的常量名
define("GREETING", "欢迎访问 Runoob.com");
 
function myTest() {
    echo GREETING;
}
 
myTest();
echo"<br/>"; 
echo strlen("Hello world!");
echo"<br/>"; 
echo strpos("Hello world!","world");
echo"<br/>";

$x=10;
echo'<br>';
echo ++$x;
echo'<br>';
$x = 'hellow';
$x .= ',world';
echo $x;
//三元运算符
$test = '菜鸟教程';
$username=isset($test)?$test:'nobody';
echo $username,PHP_EOL;
$t=date("H");
if ($t<"20")
{
    echo "Have a good day!";
}
else{
    echo"Have a good night!";
}
//数组
echo '<br/>';
$cars = array('BMW','AUDI','Toyota');
//计算数组长度
echo count($cars);
$arrlength=count($cars);
for($x=0;$x<$arrlength;$x++){
    echo $cars[$x];
    echo'<br>';
}
//关联数组'=>'
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo '<br>';
$ages=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
 
foreach($ages as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
//判断手机号码是否有效
$xxx = array(17317061743,18031270786,8848);
$arr=count($xxx);
for($y=0;$y<$arr;$y++){
    if(strlen($xxx[$y])==11){
        echo "电话号码正确";
        echo'<br>';
    }
    else{
        echo"电话号码错误";
        echo'<br>';
    }
    
}

$i = 1;
while($i <= 10){
    echo $i . '<br/>';
    $i ++;
}
   
$i = date('s');
while ($i<30){
    echo date("Y-m-d H:i:s") . '<br/>';
    $i = date('s') ;
    sleep(1);
}

$str2='woxihuanphp';

echo '<pre>';

$arrt = str_split($str2);

print_r($arrt);
?>