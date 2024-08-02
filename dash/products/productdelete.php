<?php 

if(isset($_POST['product_id'])){
  require_once "../../help.php";
  $statmentOFSelect = "select image from products where id = $_POST[product_id]";
  $queryOfImage = mysqli_query($connection , $statmentOFSelect);
  $imageName = mysqli_fetch_assoc($queryOfImage);

  if($imageName['image'] != 'default_product.png'){
    unlink('uploads/' . $imageName['image']);
  }

  $id = $_POST['product_id'] ;
  // 1-  connect
  $statment = "DELETE FROM products WHERE id = $id";


  // 2- statment
  $query = mysqli_query($connection , $statment);

  header('location:products.php');
}