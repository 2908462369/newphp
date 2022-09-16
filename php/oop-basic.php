<?php
header('Content-Type: text/html; charset=utf-8');
//封装
//默认情况下，所有属性和方法在没有明确修饰符时都是public的
//private表示私有在类的定义中可以使用，在实例和子类中不能使用
//protected受类的保护，在实例中不能直接使用，在子类中可以使用
//子类可以在自己的类中创建扩展新的方法
class People{
    private $name = '王五';  //定义类时可以给属性一个初始值，不需要使用var
    var $age = 0;
    var $addr = '';
    var $nation = '';

    function talk(){
        echo "$this->name 正在说话 . <br/>";
    }
    private function fuck(){
        echo "$this->name 正在炒币 . <br/>";
    }
    protected function eat($type="屎"){
        echo "$this->name 正在吃  $type . <br/>";
        $this->fuck();
    }
    //针对私有属性，可以设置公有方法，对类的私有属性进行修改或取值
    //以下两个方法为共有方法操作私有属性
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}

//$p1 = new People();
//$p1->name = '张三';
//$p1->age = 30;
//$p1->addr = '17317061744';
//$p1->nation = '曲阳县';
//$p1->talk();
//$p1->fuck();
//$p1->eat();
//$p1->setName('张三');
//echo $p1->getName() . "<br/>";

class Man extends People{
  function fuck(){    //父类中有的方法可以在子类中进行覆盖重写
        echo "$this->name 正在炒币 . <br/>";
        //$this->eat();
        parent::eat();//更加正统的方法，在子类中使用parent调用父类中被protected的方法
    }
}
$m = new Man();
//$m->fuck(); //子类无法使用父类的私有属性和私有方法
$m->talk();
$m->name = "草碧";
echo $m->name . "<br/>";
echo $m->fuck();
echo $m->talk();
//子类也不可以直接调用父类中protected的方法,可以在子类的方法中添加父类的方法再调用
?>