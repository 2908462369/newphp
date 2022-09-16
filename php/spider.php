<?php


$content = file_get_contents("http://www.woniunote.com/");
$html = new DOMDocument();
$html->preserveWhiteSpace = false;//去掉页面中无用的空格
@$html->loadHTML($content);
// $links=$html->getElementsByTagName('a');
//print_r($links);

foreach($links as $link){
   // echo $link->nodeValue . '<br/>';
   //echo $link->attributes->item(0)->nodeValue.'<br/>';  //item(0)获取到的是a标签中的第一个属性
   foreach($link->attributes as $attr){
    if($attr->nodeName=='href'){
        
        //echo $attr->nodeValue . '<br/>';
        //利用. / # 来完成完整的地址拼接，并判断url地址类型
        if(strpos($attr->nodeValue ,'/')==0){
            $linkList = array();
            array_push($linkList,"http://www.woniunote.com" . $attr->nodeValue);
        }
       else if(strpos($attr->nodeValue ,'http://')==0){
        
            array_push($linkList,$attr->nodeValue);
        }
    }
   }
}
print_r($linkList);

set_time_limit(0);
foreach($linkList as $link){
    $filename = str_replace("http://www.woniunote.com/","",$link);
    $filename = str_replace("/","-",$filename);
    $content = file_get_contents($link);
    file_put_contents("download/$filename.html",$content);
    echo "成功下载:$filename.<br/>";
    ob_flush();
    flush();
    sleep(0.5);
}
?>