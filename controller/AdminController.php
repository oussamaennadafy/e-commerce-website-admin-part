<?php

include_once __DIR__.'./../model/product.php';

class AdminController {


 public function index() {
  //code..
  session_start();
  include_once './view/index.php';
  unset($_SESSION['productAdded']);
 }

 public function addProduct() {
  //code..
  session_start();
  /////////////////
  $name = false;
  $description = false;
  ///
  $files_count = false;
  $fake_img = false;
  $file_exist = false;
  $file_size = false;
  $fileType = false;
  //
  $img_passed = 0;
  //
  ///
  $quantity = false;
  $tages = false;
  $price = false;
  $brand = false;
  $colors = false;
  $sizes = false;
  /////////////////////
   if(isset($_POST['submit'])) {
   if(!empty($_POST['name'])) {
    if(!empty($_POST['description'])) {
     //validation file...
     $countfiles = count($_FILES['file']['name']);
     if($countfiles >= 3 && $countfiles <= 6) {

      for($i=0;$i<$countfiles;$i++){
       $fileName = $_FILES['file']['name'][$i];
       $fileSize = getimagesize($_FILES["file"]["tmp_name"][$i]);
       $img_dir = './../fill-rouge/view/uploads/';
       $target_file = './../fill-rouge/view/uploads/' . basename($_FILES["file"]["name"][$i]);
       $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       if($fileSize == true) {
        if(!file_exists($target_file)) {
         if($_FILES["file"]["size"][$i] < 2000000) {
          if($imageFileType == 'jpg' || $imageFileType == 'png' || $imageFileType == 'jpeg') {
           //img verified
           $img_passed++;
          } else {
           $fileType = true;
          }
         } else {
          $file_size = true;
         }
        } else {
         $file_exist = true;
        }
       } else {
        $fake_img = true;
       }
      }
     } else {
      $files_count = true;
     }
     
     if($img_passed >= 3) {
      
      if(!empty($_POST['quantity']) && is_numeric($_POST['quantity'])) {
       $str = $_POST['tages'];
       $value = '[a-z A-Z]+';
       $match = "~^$value(,$value)*$~i";
       if(!empty($_POST['tages']) && preg_match($match, $str) ) {
        if(!empty($_POST['price']) && is_numeric($_POST['price'])) {
          if(!empty($_POST['brand']) && preg_match("/^\w+$/u", $_POST['brand'])) {
           if(!empty($_POST['sizes'])) {
            //transform sizes array to string comma sepperated...
            $sizesString = '';
            foreach ($_POST['sizes'] as $element) {
              $sizesString .= $element . ',';
            }
            $sizesString = substr($sizesString, 0, -1);
            } else {
            $sizesString = '';         
            }
            if(!empty($_POST['colors'])) {
            //transform colors array to string comma sepperated...
            $colorsString = '';
            foreach ($_POST['colors'] as $element2) {
              $colorsString .= $element2 . ',';
            }
            $colorsString = substr($colorsString, 0, -1);
            }else {
            $colorsString ='';        
            }
            $_POST['name'] = str_replace("'","''",$_POST['name']);
            $_POST['description'] = str_replace("'","''",$_POST['description']);
            //store product...
            $product = new product(
              $_POST['name'],
              $_POST['description'],
              $_POST['tages'],
              $_POST['category'],
              $colorsString,
              $_POST['price'],
              $sizesString,
              $_POST['quantity'],
              $_FILES['file']['name'][0]);
            $idProduct = $product->insertProduct();
            //imgs
            for($i=0;$i<count($_FILES['file']['name']);$i++){
              $img_dir = './../fill-rouge/view/uploads/';
              $fileName = $_FILES['file']['name'][$i];
              //upload img...
              move_uploaded_file($_FILES['file']['tmp_name'][$i],$img_dir.$fileName);
              //store img...
              $img = new ProductImg($fileName,$img_dir,$idProduct);
              $img->insertProductImg();
              $_SESSION['productAdded'] = true;
              header('Location: http://localhost/fill-rouge-admin/admin/index');
           }
          }else {
            $brand =true;
          }
        } else {
         $price = true;
        }
       } else {
        $tages = true;
       }
      } else {
       $quantity = true;
      }
     }
    } else {
     $description = true;
    }
   } else {
    $name = true;
   }
   }
  include_once './view/addProduct.php';
 }

 public function Users() {
  //code..
  include_once './view/users.php';
 }



}