<?php

require_once 'Connection.php';


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
 private $quantity;
 private $first_img;
 private $brand;
 
function __construct($name_item , $description_item , $tages_item , $category_item , $colors , $price_item , $sizes , $quantity , $first_img , $brand)
 {
  $this->name_item = $name_item;
  $this->description_item = $description_item;
  $this->tages_item = $tages_item;
  $this->category_item = $category_item;
  $this->colors = $colors;
  $this->price_item = $price_item;
  $this->sizes = $sizes;
  $this->quantity = $quantity;
  $this->first_img = $first_img;
  $this->brand = $brand;
 }

 public function insertProduct() {
  $ctn = new Connection();
  return $ctn->insertProduct(
   $this->table,
   ['name_item','description_item','tages_item','category_item','colors','price_item', 'sizes' , 'quantity' , 'first_img' , 'brand'],
   [$this->name_item,
   $this->description_item,
   $this->tages_item,
   $this->category_item,
   $this->colors,
   $this->price_item,
   $this->sizes,
   $this->quantity,
   $this->first_img,
   $this->brand]
  ); 


 }



}


class productImg {
  private $table= 'product_images';
  private $id;
  private $name;
  private $img_dir;
  private $product_id;

  function __construct($name,$img_dir,$product_id) {
    $this->name = $name;
    $this->img_dir = $img_dir;
    $this->product_id = $product_id;
  }

  public function insertProductImg() {
    $ctn = new Connection;
    $ctn->insert($this->table,['name','img_dir','product_id'],[$this->name,$this->img_dir,$this->product_id]);
  }


}