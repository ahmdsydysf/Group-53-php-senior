<?php

var_dump($_GET);
var_dump($_POST);

$username = $_POST["username"] ;
$password = $_POST["password"] ;
$flag = 0;
$all_errors = [];
var_dump($all_errors);
// if(isset($username)) {
//     if(!empty($username)) {
//         if(strlen($username) >= 3) {
//             if(preg_match("/senior$/", $username)) {
//                 echo $username;
//             } else {
//                 echo "error msg you must end with senior";
//             }
//         } else {
//             echo "error msg you must enter username more than 2 char";
//         }
//     } else {
//         echo "error msg you must enter username";
//     }
// }
if(isset($username)) {
    if(empty($username)) {
        $all_errors['un_empty'] = "error msg you must enter username <br>";
    } else {
        $flag++;
    }
    if(strlen($username) < 3) {
        $all_errors['un_length'] = "error msg you must enter username more than 2 char <br>";
    } else {
        $flag++;
    }
    if(! preg_match("/senior$/", $username)) {
        $all_errors['un_senior'] = "error msg you must end with senior <br>";
    } else {
        $flag++;
    }
}

if(isset($password)) {
    if(!empty($password)) {
        $flag++;
    } else {
        $all_errors['pw_emty'] = "error msg you must enter password <br>";
    }
    if(strlen($password) < 8) {
        $all_errors['pw_length'] = "error msg you must enter password more than 2 char <br>";
    } else {
        $flag++;
    }
    if(! preg_match("@[A-Za-z]@", $password)) {
        $all_errors['pw_reg'] = "error msg you must contain Capital litter <br>";
    } else {
        $flag++;
    }

}


if($flag == 6) {
    echo "$username and pass is $password";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

</head>
<body>
    <?php foreach($all_errors as $ero) :  ?>
        <div class="alert alert-danger">
            <?= $ero ?>
        </div>
    <?php endforeach ;?>
    <form action="" method="post">
        <input type="text" placeholder="username" name="username" required>
        <input type="text" placeholder="password" name="password">
        <button>login</button>
    </form>
</body>
</html>