<?php

namespace controllers;

class MyController{


	public function index(){
		echo "this is index page";
	}

	public function one(){
		echo "this is function one";
	}

	public function testing(){
		view('testing');
	}

	public function login(){
		view('login');
	}
}



?>