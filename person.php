<?php


// 声明类 class  类名第一个字母大写
//  属性-》变量 \  成员方法

class Person
{
     public $name='欧阳振宇'; //属性 变量
     public $sex;
     public $age;
     private $address='中国'; //private只能类内调动，不能在类外调用

     public function run(){  //成员方法
     	echo $this->name."在运动会跑得最快"; //$this 类内调动
     }
}



//对象   对象名称 = new 　类名称（）; 
//实例  new   实例后成为对象

$p = new Person();
// echo $p -> name ;
// echo $p -> address;
// var_dump($p)
$p->name = '志聪';  //类的扩展
$p -> run(); 

$p2 = new Person();
echo $p2->name;







