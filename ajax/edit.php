<?php 

$connection = mysqli_connect('localhost' , 'root' , '' , 'group53ajax');
$stat = "select * from students where id = $_GET[id]";
// another way to get id
// $data = stripslashes(file_get_contents("php://input"));
// $myData = json_decode($data , true);

// $Mid = $myData['id'];
$stdData = mysqli_query($connection , $stat);
$finalDaata = mysqli_fetch_assoc($stdData);
echo json_encode($finalDaata);
