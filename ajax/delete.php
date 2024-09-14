<?php 
$data = stripslashes(file_get_contents("php://input"));
$myData = json_decode($data , true);

$Mid = $myData['id'];

$connection = mysqli_connect('localhost' , 'root' , '' , 'group53ajax');
$tat = "delete from students where id = $Mid";

mysqli_query($connection , $tat);
if(!mysqli_error($connection)){
  echo 'student is deleted successfully';
}else{
  echo 'plz try again';
}