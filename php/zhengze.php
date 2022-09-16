<?php
header('Content-Type: text/html; charset=utf-8');

function re_0(){
    $source = "17317061743";
    //$pattern = "/^Go*/"; *
    $pattern = "#^1[3-9]\d{9}$#"; //前面满足，以e结尾就可以，.代表任意字符，如果字符串以.结尾需要用转义字符\.来表示
    $result = preg_match($pattern,$source);
    if($result){
        echo "匹配成功.<br/>";
    }
    else{
        echo "匹配失败.<br/>";
    }
}
re_0();

function re_ip(){
    $source = "10.20.3.34";
    $pattern = "/(^[01]?\d?\d{1}$)|(^2[0-4]\d$)|(^25[0-5]$)\.(^[01]?\d?\d{1}$)|(^2[0-4]\d$)|(^25[0-5]$)\.(^[01]?\d?\d{1}$)|(^2[0-4]\d$)|(^25[0-5]$)\.(^[01]?\d?\d{1}$)|(^2[0-4]\d$)|(^25[0-5]$)/";
    echo preg_match($pattern,$source);

}


?>