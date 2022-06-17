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
		$str="INSERT INTO `$table`(".$names.") VALUES (".$values.")";
		$query=$this->conn->prepare($str);
		$query->execute();
		return $this->conn->lastInsertId();
	}


	public function selectAllProducts($table)
	{
		$query = $this->conn->prepare("SELECT `name_item`,`first_img`,`id`,`price_item`,`tages_item`,`description_item` FROM `$table` ORDER BY id DESC");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function selectAllOrders()
	{
		$query = $this->conn->prepare("SELECT * FROM `my_order` ORDER BY `created_at` DESC");
		$query->execute();
		$order=$query->fetchAll(PDO::FETCH_ASSOC);

		$query = $this->conn->prepare("SELECT * FROM `order_checkout` ORDER BY `created_at` DESC");
		$query->execute();
		$chechout= $query->fetchAll(PDO::FETCH_ASSOC);
		return ['orders'=>$order,'checkout'=>$chechout];
	}

	public function getProductPrice($product_id)
	{
		$query = $this->conn->prepare("SELECT `price_item`,`first_img`,`name_item` FROM `products` where id=$product_id");
		$query->execute();
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function selectSemiOrder($id)
	{
		$query = $this->conn->prepare("SELECT semi_order.* , products.name_item , products.first_img , products.price_item FROM `semi_order` , `products` WHERE semi_order.product_id = products.id AND semi_order.id = '$id'");
		$query->execute();
		return $query->fetch(PDO::FETCH_ASSOC);
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