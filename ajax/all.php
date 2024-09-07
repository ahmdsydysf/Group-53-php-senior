<?php 

$connection = mysqli_connect('localhost' , 'root' , '' , 'group53ajax');
$tat = 'select * from students';

$query = mysqli_query($connection , $tat);
$count = mysqli_num_rows($query);

if($count > 1){
  $allData = [];
  while($std = mysqli_fetch_assoc($query)){
    $allData[] = $std;
  }
}else{
  $allData[]= mysqli_fetch_assoc($query);
}

echo json_encode($allData);

