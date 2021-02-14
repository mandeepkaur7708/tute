<?php


class Database{

	private $db;
	public function __construct(){
		$this->db = new PDO('mysql:host=localhost;dbname=tute','root','');
	}

	public function insert($table,$columns){
		$column = array_keys($columns);
		$column = implode(',',$column);
		$questionMarks = substr((str_repeat('?,', count($columns))),0,(count($columns)*2)-1);
		$query = $this->db->prepare('INSERT INTO '.$table.'('.$column.') VALUE('.$questionMarks.')');
		$query->execute(array_values($columns));
		return true;
	}

	public function getAll($table){
		$query = $this->db->prepare('SELECT * FROM '.$table);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getWhere($table, $where, $operator){
		$whereArray = [];
		foreach($where as $column => $value){
			$whereArray[] = ' '.$column.' = ? ';
		}
		$values = array_values($where);
		$where = implode($operator,$whereArray);
		$query = $this->db->prepare('SELECT * FROM '.$table.' WHERE '.$where);
		$query->execute($values);
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function update($table, $recordId,$updateArray){
		$updateCustomArray = [];
		foreach($updateArray as $column => $value){
			$updateCustomArray[] = $column.' = ?';
		}
		$columnToUpdate = implode(',', $updateCustomArray);
		$query = $this->db->prepare('UPDATE '.$table.' SET '.$columnToUpdate.' WHERE id = ?');
		$dataToUpdate = array_values($updateArray);
		$dataToUpdate[] = $recordId;
		$query->execute($dataToUpdate);
		return true;
	}
}



?>