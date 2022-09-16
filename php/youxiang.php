<?php 
/** 
 * 邮件的正则表达式  @author：lijianghai 
 */ 
header('Content-Type: text/html; charset=utf-8');
 function  isEmail($input = null) 
 {   
  $email = $input; 
  
    $pattern = "/^[a-zA-Z][a-zA-Z0-9]{3,9}@[0-9a-zA-Z]{1,10}(.)(com|cn|com.cn|net)$/";
  if(preg_match($pattern,$email)) {
   echo $email."符合格式规范"; 
  } 
  else 
  { 
   echo  $email.'格式错误'; 
  } 
 } 
 $email = "W290846236@qq.com"; 
 isEmail($email); 
?> 