<?php
header('Content-Type: text/html; charset=utf-8');
class People{
    var $name = '';
    var $age = 0;
    var $addr = '';
    var $nation = '';

    function talk(){
        echo "$this->name 正在说话 . <br/>";
    }
    function fuck(){
        echo "$this->name 正在炒币 . <br/>";
    }

}

$p1 = new People();
$p1->name = '张三';
$p1->age = 30;
$p1->addr = '17317061744';
$p1->nation = '曲阳县';
 
 
//一旦完成实例化，实例与实例之间无任何关系，分布于不同的内存中
$p2 = new People();
$p2->name = '李四';
$p2->age = 27;
$p2->addr = '17317061754';
$p2->nation = '定州市';
//面向对象编程基础
$p2->fuck();
?>