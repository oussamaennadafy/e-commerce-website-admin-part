<?php

require_once 'Connection.php';

Class Product {

 private $table= 'products';
 private $id;
 private $first_name;
 private $last_name;
 private $phone_number;
 private $email;
 private $address;
 private $password;
 
 function __construct($first_name,$last_name,$phone_number,$email,$address,$password)
 {
  $this->first_name = $first_name;
  $this->last_name = $last_name;
  $this->phone_number = $phone_number;
  $this->email = $email;
  $this->password = $password;
  $this->address = $address;
 }

 public function insertUser() {
  $ctn = new Connection();
  $ctn->insert(
   $this->table,
   ['first_name','last_name','phone_number','email_address','address','password'],
   [$this->first_name,$this->last_name,$this->phone_number,$this->email,$this->address,$this->password]
 );
 }

 public static function checkUser($email,$password) {
  $ctn=new Connection();
  $query=$ctn->getconn()->prepare("SELECT * FROM `users` where `email_address` = '$email' AND `password` = '$password'");
		$query->execute();
  $count = $query->rowCount();
  $row   = $query->fetch(PDO::FETCH_ASSOC);
  if($count == 1 && !empty($row)) {
    return $row;
   } else {
    return false;
   }
}













}