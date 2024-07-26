<?php 
$flag = 0;
$allerrors = [];

if(isset($_POST['username'])){

  $un = $_POST['username'];
  $pw = $_POST['password'];
  $em = $_POST['email'];

  if(!empty($un)){
    if(strlen($un) > 3){
      if(preg_match('/^senior/' , $un)){
        $flag++;
      }else{
        $allerrors['reg'] = 'u must start un with senior';
      }
    }else{
      $allerrors['len'] = 'u must length > 3 ';
    }
  }else{
    $allerrors['empty'] = 'u must enter un';
  }


  if($flag == 1){

    // 1-  connect
    // 2- statment
    // 3- excute

  $connection =  mysqli_connect('localhost' , 'root' , '' , 'test_gr_53');

  $stat = "INSERT INTO users (username , password , email)  VALUES  ('$un' , '$pw' , '$em')";


    mysqli_query($connection  ,   $stat);   
    header('location:login.php');
  }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Registration</h1>
  <?php if(! empty($allerrors)) : ?>
    <?php foreach($allerrors as $error) : ?>
      <?= $error ?>
    <?php endforeach; ?>
  <?php endif ?>
      <form action=""  method="post" >
        <input type="text" name="username" placeholder="name">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="password" placeholder="password">
      
        <button>submit</button>
      </form>
</body>
</html>