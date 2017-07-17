<?php

class Core_db 
{
	private $con;

	function __construct() 
	{
		$this->con = new Mysqli('localhost','root','secret','');
		if ($this->con->connect_errno) {
			echo $this->con->connect_error;
			exit;
		}
	}
	public function select($query,$count = 0)
	{
		$arr = [];
		$result = $this->con->query($query);
		if ($count == 1) {
			$arr = $result->fetch_assoc();
		} else {
			while($row = $result->fetch_assoc()) {
				$arr[] = $row;
			}
		}
		return $arr;
	}

	public function insert($table,$arr)
	{
		$fields = [];
		$values = [];
		foreach($arr as $field => $value) {
			$fields[] = $field;
			$values[] = "'$value'";
		}
		$fields = '('. join(',',$fields) .')';
		$values = '('. join(',',$values) .')';
		$query = "INSERT INTO $table $fields VALUES $values";
		$res = $this->con->query($query);
		return $res;
	}

	public function update($table,$new_values,$where) 
	{

		$values = [];
		foreach ($new_values as $field => $value) {
			$values[] = $field.'='."'$value'";
		}
		$values = join(', ',$values);
		$query = "UPDATE $table SET $values WHERE $where";
		$res = $this->con->query($query);
		return $res;
	}

	public function delete($table,$where) 
	{

		$query = "DELETE FROM $table WHERE $where";
		$res = $this->con->query($query);
		return $res;
	}
}
