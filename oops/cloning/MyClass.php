<?php

class MyClass{

	public $a = 0;

	public function one(){
		$this->a = 2;
	}

	public function two(){
		$this->a = $this->a*2;
	}

	public function three(){
		$this->a += 2;
	}

	public function result(){
		return $this->a;
	}
}