<?php 

if(isset($_POST['user'])){
  require_once "../../help.php";

  $id = $_POST['user'] ;
  // 1-  connect
  $statment = "DELETE FROM users WHERE id = $id";
  // 2- statment
  $query = mysqli_query($connection , $statment);

  header('location:users.php');
}