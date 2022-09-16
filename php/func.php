<?php
header('Content-Type: text/html; charset=utf-8');

/*function caobi($phone){
    if( $phone[0] != 1 ||strlen($phone) != 11 || $phone[1]< "3" || $phone[1]> "9" || ! is_numeric($phone)){
        return false;
    }
    return true;
}
$phone = caobi(17317061743);
echo $result;
*/

function checkPhone($phone){
    $result = preg_match("/^1[3-9]\d{9}$/",$phone);
    return $result;
}
function testFunc($phone,$expect){
    $result = checkPhone($phone);
    if($result == $expect){
        echo "测试成功.<br/>";
    }
    else{
        echo "测试失败.<br/>";
    }
}
testFunc("17317061743",true);
testFunc("110",false);
testFunc("120",true);
?>