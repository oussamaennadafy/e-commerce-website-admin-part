<?php

require_once 'Connection.php';

class productImg {
  private $table= 'product_img';
  private $id;
  private $name;
  private $img_dir;
  private $product_id;

  function __construct($id,$name,$img_dir,$product_id) {
    $this->id = $id;
    $this->name = $name;
    $this->img_dir = $img_dir;
    $this->product_id = $product_id;
  }

  public function insertProductImg() {
    $ctn = new Connection;
    $ctn->insert($this->table,['id','name','img_dir','product_id'],[$this->id,$this->name,$this->img_dir,$this->product_id]);
  }


}


Class Product {

 private $table= 'products';
 private $id;
 private $name_item;
 private $description_item;
 private $tags_item;
 private $category_item;
 private $colors;
 private $price_item;
 private $orders;
 private $sizes;
 
function __construct($id , $name_item , $description_item , $tags_item , $category_item , $colors , $price_item , $orders , $sizes)
 {
  $this->id = $id;
  $this->name_item = $name_item;
  $this->description_item = $description_item;
  $this->tages_item = $tages_item;
  $this->category_item = $category_item;
  $this->colors = $colors;
  $this->price_item = $price_item;
  $this->orders = $orders;
  $this->sizes = $sizes;
 }

 public function insertProduct() {
  $ctn = new Connection();
  $ctn->insert(
   $this->table,
   ['name_item','description_item','tages_item','category_item','colors','price_item','orders','sizes'],
   [$this->name_item,$this->description_item,$this->tages_item,$this->category_item,$this->colors,$this->price_item,$this->orders,$this->sizes]
 );
 }














}