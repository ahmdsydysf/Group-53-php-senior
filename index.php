<?php

// var_dump($_GET);
// var_dump($_POST);

// $username = $_POST["username"] ;
// $password = $_POST["password"] ;
// $flag = 0;
// $all_errors = [];
// var_dump($all_errors);
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
// if(isset($username)) {
//     if(empty($username)) {
//         $all_errors['un_empty'] = "error msg you must enter username <br>";
//     } else {
//         $flag++;
//     }
//     if(strlen($username) < 3) {
//         $all_errors['un_length'] = "error msg you must enter username more than 2 char <br>";
//     } else {
//         $flag++;
//     }
//     if(! preg_match("/senior$/", $username)) {
//         $all_errors['un_senior'] = "error msg you must end with senior <br>";
//     } else {
//         $flag++;
//     }
// }

// if(isset($password)) {
//     if(!empty($password)) {
//         $flag++;
//     } else {
//         $all_errors['pw_emty'] = "error msg you must enter password <br>";
//     }
//     if(strlen($password) < 8) {
//         $all_errors['pw_length'] = "error msg you must enter password more than 2 char <br>";
//     } else {
//         $flag++;
//     }
//     if(! preg_match("@[A-Za-z]@", $password)) {
//         $all_errors['pw_reg'] = "error msg you must contain Capital litter <br>";
//     } else {
//         $flag++;
//     }

// }


// if($flag == 6) {
//     echo "$username and pass is $password";
// }
var_dump($_POST);
var_dump($_FILES);

$myImage = $_FILES['myImage']; // array

$fileName = uniqid() . $myImage['name'];
$filesize = $myImage['size'];
$fileError = $myImage['error'];
$filePath = $myImage['tmp_name'];


move_uploaded_file($filePath  , 'uploads/' .$fileName );
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

<img src="uploads/<?= $fileName ?>" alt="">
    
    <form action="" method="post" enctype="multipart/form-data" >
        <input type="file" name="myImage" id="">
        <!-- <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <input type="email" placeholder="email" name="email">
        <input type="color" name="color">
        <br>
        <input type="radio" name="gender" value="male" id="">male
        <input type="radio" name="gender" value="female" id="">female
        <br>
        <h2>courses</h2>
        <input type="checkbox" name="course[]" value="html">html
        <input type="checkbox" name="course[]" value="css">css
        <input type="checkbox" name="course[]" value="js">js
        <br>
        <h2>select course lap</h2>
        <select name="lap[]" id="" multiple>
            <option value="101">lap num 1</option>
            <option value="102">lap num 2</option>
            <option value="103">lap num 3</option>
            <option value="104">lap num 3</option>
        </select> -->
        <!-- <input type="range" name="price"> -->
        <button>login</button>
    </form>
</body>
</html>