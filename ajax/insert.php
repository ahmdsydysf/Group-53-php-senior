<?php 
// stripslashes 
$data = stripslashes(file_get_contents('php://input'));

$myFinalData = json_decode($data , true);

$name = $myFinalData['name'];
$email = $myFinalData['email'];
$password = $myFinalData['pass'];

$connection = mysqli_connect('localhost' , 'root' , '' , 'group53ajax');
$sts = "insert into students (name , email , password) values ('$name' ,'$email' , '$password')";
mysqli_query($connection , $sts);


if(! mysqli_error($connection)){
  echo "add student was success";
}else{
  echo mysqli_error($connection);
}