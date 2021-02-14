<?php

class ClassOne{

	private function funcOne(){
		echo "This is function one of class one";
	}

	public function getFunctionOne(){
		$this->funcOne();
	}
}

?>