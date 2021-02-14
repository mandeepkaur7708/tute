<?php

class NewClass{

	public $a = '';

	public function one(){
		$this->a = 'Hello, ';
		return $this;
	}

	public function two(){
		$this->a .= ' How';
		return $this;
	}


	public function three(){
		$this->a .= ' are';
		return $this;
	}

	public function four(){
		$this->a .= ' you?';
		return $this;
	}

	public function result(){
		return $this->a;
	}
}


?>