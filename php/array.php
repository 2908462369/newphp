<?php
header('Content-Type: text/html; charset=utf-8');
$student = array("王心康","孙栋","张吊飞","sunxiaochuan","caodapi");
$len  =  count($student);
echo $len . "<br/>";
echo $student[0] . "<br/>";
$student[2]="王八蛋";
print_r($student);
echo "<pre>";
$index = array_rand($student,1);
echo $student[$index]."<br/>";
//使用pop函数对数组最后一位删除
array_pop($student);
print_r($student);
echo rand(5,10);
//使用随机函数，实现随机点名
$index2 = rand(0,count($student)-1);
echo $student[$index2] . "<br/>";
//数组去重 array_unique()函数
$a = array ("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));
//数组遍历，使用循环输出数组
$a = array ("6","c","5");
for($i = 0;$i<count($a);$i++){
    echo $a[$i] . "<br/>";
}
//数组遍历，使用foreach来进行循环输出
$a = array ("6","c","5");
foreach($a as $s){
    echo $s . "<br/>";
}
//排序
$a = array ("6","7","5","9","11","78");
 rsort($a);
foreach($a as $s){
    echo $s . "<br/>";
}
//关联数组，以key=>value组成的键值对,取值时用key来取值
$student01 = array("name"=>"王小川","sex"=>"男","age"=>"23","like"=>"超配");
$student02 = array("name"=>"王大川","sex"=>"男","age"=>"23","like"=>"黑丝");
$student03 = array("name"=>"王老川","sex"=>"男","age"=>"23","like"=>"白丝");
$student04 = array("name"=>"王川","sex"=>"男","age"=>"23","like"=>"裸足");
echo $student01["name"] . "<br/>";
echo $student02["like"] . "<br/>";
 $student02["like"] = "裸足";
 //遍历数组value
foreach($student02 as $stu){
    echo $stu . "<br/>";
}
//遍历数组的key和value
foreach($student03 as $key=>$value){
    echo $key . "======>" . $value . "<br/>";
}
$keys = array_keys($student03);
foreach($keys as $key){
    echo $student03[$key] . "<br/>"; 
}

//不是用内置函数，实现数组去重
//把字符串打散为数组
$source = "19831270788/666666/cbcbcb/sfsfsf";
$myarray = explode("/",$source);
print_r($myarray);
echo "<br/>";
//把数组合并成字符串 implode函数
$b = array("19831270788","666666","cbcbcb","sfsfsf");
$myarray = implode(",",$b);
echo $myarray . "<br/>";
?>