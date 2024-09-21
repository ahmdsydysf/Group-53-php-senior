<?php 
// stripslashes 
$data = stripslashes(file_get_contents('php://input'));

$myFinalData = json_decode($data , true);

$id = intval($myFinalData['id']);
$name = $myFinalData['name'];
$email = $myFinalData['email'];
$password = $myFinalData['pass'];

$connection = mysqli_connect('localhost' , 'root' , '' , 'group53ajax');
$sts = "insert into students (id ,name , email , password) values ($id ,'$name' ,'$email' , '$password') on Duplicate key update name = '$name' , email = '$email' , password = '$password'";
mysqli_query($connection , $sts);


if(! mysqli_error($connection)){
  echo "add student was success";
}else{
  echo mysqli_error($connection);
}