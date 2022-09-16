<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
    <script>
        function json(){

        }
        </script>
</head>
<body>
    <?php
    $std1=array('name'=>'wang','age'=>'30','phone'=>'13034200002');
    $std2=array('name'=>'li','age'=>'29','phone'=>'13034200001');
    $std3=array('name'=>'zhang','age'=>'28','phone'=>'13034200003');
    $class1=array($std1,$std2,$std3);
    echo json_encode($class1);//json序列化，将数组转换成字符串

    //json反序列化，将一个字符串再转换为对象
    $string='[{"name":"\u5f20\u4e09","age":"30"}]';
    $array=json_decode($string);
    print_r($array);
    ?>
</body>
</html>