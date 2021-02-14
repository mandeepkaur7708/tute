<?php
require_once "config.php";
class Database{
	private $db;
	function __construct(){
		$this->db= new PDO('mysql:host='.host.';dbname='.database_name,username,password);
	}
	public function getEmp(){
		$query= $this->db->prepare('SELECT * FROM employees');
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_OBJ);
		return $result;
	}
	public function newEmp(){
		$query=$this->db->prepare('INSERT INTO employees (emp_id,name,mobile) VALUES (105,"e",7854005945)');
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_OBJ);
	}
	public function updateEmp(){
		$query=$this->db->prepare('UPDATE employees SET name="a" WHERE name="g"');
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_OBJ);
	}
	public function dltEmp(){
		$query=$this->db->prepare('DELETE FROM employees WHERE name="e" ');
		$query->execute();
		$result=$query->fetchALL(PDO::FETCH_OBJ);
	}
	}

?>