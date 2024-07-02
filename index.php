<?php

var_dump($_GET);
var_dump($_POST);

if(isset($_GET['submitBTN'])) {
    var_dump($_GET['username'], $_GET['password']);
}

$username = 'ahmedSayed';
$password = 10105;

$users = [
    ['username' => 'mohamed' , 'password' => 5050],
    ['username' => 'ahmed' , 'password' => 7895],
    ['username' => 'ahmedSayed' , 'password' => 1010],
    ['username' => 'marawan' , 'password' => 9632],
];

$flag = 0;

foreach ($users as $user) {
    if($user['username'] == $username  && $user['password'] == $password) {
        $flag = 1;
        break;
    }
}

if($flag == 1) {
    header('location:home.php');
} else {
    echo "<h1> try again </h1>";
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
    <form action="" method="post">
        <input type="text" placeholder="username" name="username">
        <input type="text" placeholder="password" name="password">

        <button name="sumbitBTN">login</button>
    </form>
</body>
</html>