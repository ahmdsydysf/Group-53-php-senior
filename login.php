<?php 
session_start();
$flag = 0;
$flag2 = 0;
$allerrors = [];

var_dump($_SESSION);
// var_dump($_SERVER);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
// if(isset($_POST['username'])){

  $un = $_POST['username'];
  $pw = $_POST['password'];

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
      require_once "help.php";
    // 1-  connect
    $statment = 'SELECT * FROM users';
    // 2- statment
    $query = mysqli_query($connection , $statment);
    $num_of_users = mysqli_num_rows($query);
    // while($user = mysqli_fetch_assoc($query)){

    //   if($un == $user['username'] && $pw == $user['password']){
    //     header('location:index.php');
    //   }else{
    //     $flag2 = 1 ;
    //   }

    // }

    for($i =0 ; $i < $num_of_users  ;$i++){
      $user = mysqli_fetch_assoc($query);
      if($un == $user['username'] && $pw == $user['password']){

            $_SESSION['login_user'] = $user['username'];
            $_SESSION['login_user_id'] = $user['id'];
            $_SESSION['login_user_email'] = $user['email'];
            $_SESSION['login_user_password'] = $user['password'];
          // $_SESSION['user_name'] = $un;

            header('location:index.php');

          }else{
            $flag2 = 1 ;
          }
    }

    // DRY
if($flag2 != 0){
  $allerrors['checkDB'] = 'plz check username and password';
}

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
  <h1>login</h1>
  <?php if(! empty($allerrors)) : ?>
    <?php foreach($allerrors as $error) : ?>
      <?= $error ?>
    <?php endforeach; ?>
  <?php endif ?>
      <form action=""  method="post" >
        <input type="text" name="username" placeholder="name">
        <input type="text" name="password" placeholder="password">

        <button>submit</button>
      </form>
</body>
</html>