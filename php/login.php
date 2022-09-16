<?php
header('Content-Type: text/html; charset=utf-8');
$username = $_POST['username'];
$password = $_POST['password'];
$vcode = $_POST['vcode'];
$conn = mysqli_connect('127.0.0.1','root','root','student');
MySQLi_query($conn,"set names utf8");
MySQLi_set_charset($conn,'utf8');
$sql = "select * from student from where username = '$username' and password='$password'";

$result = _query($conn,$sql);
$rows = MySQLi_fetch_all($result);
//遍历结果集数据并在表格中展示
foreach($rows as $row){

}
?>