<?php


class AdminController {


 public function index() {
  //code..
  include_once './view/index.php';
 }

 public function addProduct() {
  //code..
  /////////////////
  $name = false;
  $description = false;
  ///
  $files_count = false;
  $fake_img = false;
  $file_exist = false;
  $file_size = false;
  $FileType = false;
  //
  $img_passed = 0;
  //
  ///
  $quantity = false;
  $tages = false;
  $price = false;
  $colores = false;
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
       $target_file = 'view/uploads/' . basename($_FILES["file"]["name"][$i]);
       $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       // $sql = "INSERT INTO fileup(id,name) VALUES ('$filename','$filename')";
       if($fileSize == true) {
        if(!file_exists($target_file)) {
         if($_FILES["file"]["size"][$i] < 2000000) {
          if($imageFileType == 'jpg' || $imageFileType == 'png' || $imageFileType == 'jpeg') {
           //upload and store img...
           move_uploaded_file($_FILES['file']['tmp_name'][$i],'view/uploads/'.$fileName);
           $img_passed++;
          } else {
           $FileType = true;
           echo 'file is not img';
          echo '<br>';
          }
         } else {
          $file_size = true;
          echo 'img is to large';
          echo '<br>';
         }
        } else {
         $file_exist = true;
         echo 'product already exist';
         echo '<br>';
        }
       } else {
        $fake_img = true;
        echo 'fake img';
        echo '<br>';
       }
      }
     } else {
      $files_count = true;
      echo 'select between 3 and 6 imgs';
      echo '<br>';
     }
     
     if($img_passed >= 3) {
      
      if(!empty($_POST['quantity']) && is_numeric($_POST['quantity'])) {
       $str = $_POST['tages'];
       $value = '[a-z A-Z]+';
       $match = "~^$value(,$value)*$~i";
       if(!empty($_POST['tages']) && preg_match($match, $str) ) {
        if(!empty($_POST['price']) && is_numeric($_POST['price'])) {
         if(!empty($_POST['sizes'])) {
          if(!empty($_POST['colors'])) {
           //store product...
           echo 'passed';
           echo '<br>';
          }else {
           $colors = true;
           echo 'colores empty';
          echo '<br>';
          }
         } else {
          $sizes = true;
          echo 'sizes empty';
          echo '<br>';
         }
        } else {
         $price = true;
         echo 'price empty';
         echo '<br>';
        }
       } else {
        $tages = true;
        echo 'tages empty';
        echo '<br>';
       }
      } else {
       $quantity = true;
       echo 'quantity empty';
       echo '<br>';
      }
     }

    } else {
     $description = true;
     echo 'description empty';
     echo '<br>';
    }
   } else {
    $name = true;
    echo 'name empty';
    echo '<br>';
   }
   }
  include_once './view/addProduct.php';
 }

 public function Users() {
  //code..
  include_once './view/users.php';
 }



}