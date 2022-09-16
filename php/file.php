<?php

//文件读写的步骤：1.打开文件 fopen 2.读写 fread fwrite 3.关闭文件：fclose 附加函数：feof 判断文件是否已经到末尾
header('Content-Type: text/html; charset=utf-8');
$file = fopen("D :/cc.txt","a");
/*while(!feof($file)){
$line = fgets($file);
$line = str_replace("\n","<br/>",$line);  
echo $file; 
}*/
//file_get_contents直接读取文件内容 
//iconv函数直接对字符集进行替换 
//explode替换文件内容  
//ftail获取当前文件指针所在位置
//直接将文件指针指向某个位置fseek
fwrite($file,'\ntest,test123');
fclose($file); 
if (function_exists("iconv"))     {
    $file=iconv("UTF-8","GBK",$file);
}
//file_put_contents一次性写入文件 
//使用file_get_contents发送get请求网页
$content = file_get_contents("http://il501.xyz");
echo $content;
$fg = fopen("D :/xxx.txt","w");
file_put_contents("D:/xxx.txt","\ncnmb",FILE_APPEND);
echo $fg; 
?>