<?php

class Connection {

 private $serverName = 'localhost';
 private $userName = 'root';
 private $password = '';
 private $database = 'enson';
 private $conn;

	public function __construct()
	{

		try {
			  $this->conn = new PDO("mysql:host=$this->serverName;dbname=$this->database", $this->userName, $this->password);
			  // set the PDO error mode to exception
			 
		
			} catch(PDOException $e) 
			{
			  echo "Connection failed: " . $e->getMessage();
			}
	}

 public function getconn() {
  return $this->conn;
}


 public function insert($table,$tableCln,$tableVal)
	{
		$names="";
		$values="";
		$vrls="";
		for ($i=0; $i <count($tableCln) ; $i++) 
		{ 
			if ($i>0) 
			{
				$vrls=",";
			}
			$names.=$vrls."`".$tableCln[$i]."`";
			$values.=$vrls."'".$tableVal[$i]."'";
		}
		$str="INSERT INTO `$table`(".$names.") VALUES (".$values.")";
		$query=$this->conn->prepare($str);
		$query->execute();
	}

 public function insertProduct($table,$tableCln,$tableVal)
	{
		$names="";
		$values="";
		$vrls="";
		for ($i=0; $i <count($tableCln) ; $i++) 
		{ 
			if ($i>0) 
			{
				$vrls=",";
			}
			$names.=$vrls."`".$tableCln[$i]."`";
			$values.=$vrls."'".$tableVal[$i]."'";
		}
		echo $names;
		echo '<br>';
		echo $values;
		exit;
		$str="INSERT INTO `$table`(".$names.") VALUES (".$values.")";
		$query=$this->conn->prepare($str);
		$query->execute();
		return $this->conn->lastInsertId();
	}



	public function selectAll($table)
	{
		$query=$this->conn->prepare("SELECT * FROM `$table`");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function selectOne($table,$id)
	{
		$query=$this->conn->prepare("SELECT * FROM `$table` where id=$id");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC)[0];
	}
	
	public function update($table,$tableCln,$tableVal,$id)
	{
		$names="";
		$vrls="";
		for ($i=0; $i <count($tableCln) ; $i++) 
		{ 
			if ($i>0) 
			{
				$vrls=",";
			}
			$names.=$vrls."`".$tableCln[$i]."`='".$tableVal[$i]."'";
		}
		$str="UPDATE $table SET $names WHERE id=$id";
		$query=$this->conn->prepare($str);
		$query->execute();
	}
	public function delete($table,$id)
	{
		$query=$this->conn->prepare("DELETE FROM `$table` WHERE id=$id");
		$query->execute();
	}














}