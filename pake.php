<?php

class Pake{
	public $name='老莫'; //公共的  可以在类外调用
	private $money="10000"; //私有 不能在类外调用
	protected $age=20;  //受保护的  不能在类外调用

	public function run(){
		echo $this->name."这是很能跑".$this->age;
		$this->eat();
		$this->prv();
	}
	protected function eat(){
		echo $this->name."很能吃";
	}
	private function prv(){
		echo "hello";
	}
}

$p = new Pake();

// echo $p->name;
// // echo $p->money;

// echo $p->age;

$p->run();

// $p->eat();

// $p->prv();

