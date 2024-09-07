<?php 
session_start();
// var_dump($_POST['pi'] , $_SESSION['login_user_id']);
// require_once "help.php";
require_once 'dash/helper.php';

$connection = setConnection('test_gr_53');

$statment = "Insert into cart ( user_id , product_id) values ($_SESSION[login_user_id] , $_POST[pi] )";

mysqli_query($connection ,$statment );

header('location:index.php');