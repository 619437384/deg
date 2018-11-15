<?php

/*构造方法
格式：function __construct ( [参数] ) { ... ... }

*/

class Contr{
    public $name='晓峰' ;
    public $sex = '男';
    //构造方法  实例化先执行
	public function __construct(){
          echo $this->name;
          echo "<br>";
          echo $this->sex;
          echo "<br>";
          $this->run();
	}

	public function run(){
		echo "迎奥是我们的班的班花";
	}
}

// $p = new Contr();
// $p
// var_dump($p);

//构造方法可以传参
class Contr2{
	public $name ;
    public $sex;
    public $name2;
    //构造方法  实例化先执行
	public function __construct($name,$sex,$name2){
         $this->name=$name;
      
         $this->sex=$sex;
         
          $this->name2 = $name2;
          $this->run();
	}

	public function run(){
		echo $this->name."是我们的班的班花-"."班草".$this->name2;
	}
}

// $p = new Contr2('迎奥',18,'欧阳');
// echo "<br>";
// $p = new Contr2('迎奥2',18,'欧阳2');


/*
析构方法 释放内存
格式：function __destruct ( ) { ... ... }
不能参数
*/

class Contr3{
	public $name ;
    public $sex;
    public $name2;
    //构造方法  实例化先执行
	public function __construct($name,$sex,$name2){
         $this->name=$name;
      
         $this->sex=$sex;
         
          $this->name2 = $name2;
          // $this->run();
	}

	public function run(){
		echo $this->name."是我们的班的班花-"."班草".$this->name2;
	}
    //先进后出
	public function __destruct(){
        echo $this->name;
        echo "<br>";
        echo $this->name2 ;
	}
}

$p = new Contr3('春森',19,'老莫');
$p2 = new Contr3('泽贤',19,'迎奥');
