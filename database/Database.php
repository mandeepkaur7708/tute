<?php
require_once "config.php";

class Database{

	private $db;

	function __construct(){
		$this->db = new PDO('mysql:host='.host.';dbname='.database_name,username,password);
	}

	public function getStudents(){
		$query = $this->db->prepare('SELECT * FROM students');
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_OBJ);
		return $result;
	}
	// public function newstudents(){
	// 	$query = $this->db->prepare('INSERT INTO students (student_id,student_name,mobile)VALUES(1,"navneet",988888888)');
	//     $query->execute();
	// 	$result = $query->fetchAll(PDO::FETCH_OBJ);
			
	// }
	 public function updatestudents(){
		$query = $this->db->prepare('UPDATE students SET student_name="nav" WHERE student_name="navneet" ');
	    $query->execute();
		$result = $query->fetchAll(PDO::FETCH_OBJ);
	}
}