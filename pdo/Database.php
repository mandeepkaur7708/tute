<?php

require_once "config.php";

class Database extends PDO{

	public function __construct(){
		// (mysql:host=localhost;dbname=tute,root,'')
		parent::__construct('mysql:host='.host.';dbname='.database_name,username,password);
	}

	public function getEmployees(){
		$query = $this->prepare('SELECT * FROM employess WHERE id = ?');
		$query->execute([2]);
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
}