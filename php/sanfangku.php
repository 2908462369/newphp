<?php
include_once "simple_html_dom.php";
$html=file_get_html('https://www.jd.com/');
//查找超链接
// $links=$html->find('a');
// foreach($links as $link){
//     echo $link->href."<br/>";
// }
//查找图片
$images=$html->find('img');
set_time_limit(0);
foreach($images as $image){
    $src= $image->src;
    if(strpos($src,'/')==0){
      $url='https://www.jd.com/'.$src; 
      //拼接图片的URL                
    }else if(strpos($src,'http')==0){
    $url=$src;  
        //以http开头  
    }
    //下载
    $filename=end(explode("/",$url));
    //分割符号获取最后一个就是/
    $content=file_get_contents($url);
    file_put_contents("./download/$filename",$content);
    echo "图片:$filename 下载完成</br>";
    ob_flush();
    flush();
    sleep(0.5);
}


//使用属性定位方式
$titles =$html->find("div[@class='title']");  //等同于$titles = $html->find("div.title");
foreach($titles as $title){
    echo $title->innertext . "<br/>";      //只获取元素可以去plaintext
}

//确定属性只有一个之后
$node = $html->find('#title',0);
echo $node->plaintext. '<br/>';

//正则表达式
$content=file_get_contents("https://www.jd.com/");
$patten='/<a href="(.*)"/';//贪婪模式
$patten='/<a href="(.+?)"/';//非贪婪模式
preg_match_all($patten,$content,$result);
print_r( $result);

?>
