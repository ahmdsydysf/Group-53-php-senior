<?php

// $myname = "ahmed20";
// $var2 = "55";

// echo "myname is $myname and my age is $var2";
// echo 'myname is' . $myname .' and my age is ' . $var2;

//cs

// $myName = 'ahmed sayed';
// $myNamE = 'ahmed sayed2';


// php   loosely typed lang

// assigned by value   php by default

// $x = 50;

// $y = &$x;

// $x = 200;

// echo $y;



// comments type  //    /*   */    DocBlock
/**
 *
 *
 * dfsf]
 * sdf
 * sdf
 * sdf
 *
 */


// echo $firstName;
// echo '$firstName';
// echo "$firstName";
// echo 'my name is $firstName $lastName';
// echo "my name is $firstName $lastName";
// echo "my name is {$firstName} {$lastName}";
// echo 'my name is {$firstName} {$lastName}';


//  constant   defined and have value on same line  global  predefined const  ,  magic const
// $name ;
// $name = 'mohamed';
// $name = 'ahmed';
// echo $name ;

// define("DATABASENAME", 'AhmedStore2');

// $firstName = "ahmed2";
// $lastName = "sayed";
// define("DATABASENAME", $firstName);


// function test()
// {
//     global $firstName;
//     echo $firstName;
// }

// test();

// echo PHP_OS_FAMILY;
// echo PHP_VERSION;

// echo __LINE__;
// echo __DIR__;

// variable variables

// $x = 'name';
// $$x = "6565";

// echo "{$$x}";

// //  soft Debug
// var_dump($$x);
// // print_r();

// DataTypes


// scalar Types   bool (true , false)  int (100)  float(10.0556)  string (''"")
// computed Types   array  object   callable   iterable
// special Types   resource    null


// $isConnected = true ;
// $isOffline = false ;

// var_dump($isConnected);
// var_dump($isOffline);
// // print_r($isConnected);
// // print_r($isOffline);

// echo true ;
// echo false ;// empty string

// $test = null;

// // falsy values   false , 0 -0  0.0  -0.0  null  []  '0'   ''

// if($test == true) {
//     echo "this is truthy value";
// } else {
//     echo "this is falsy value";
// }

// echo PHP_INT_MIN;
// echo PHP_INT_MIN;
// echo PHP_INT_MIN;

// echo PHP_INT_MAX;
// echo PHP_INT_MIN;
// echo PHP_INT_MIN;
// echo PHP_INT_MIN;


// juggling   or casting   int->integer

// $x  = (float) 55.00 ;//55

// echo $x ;

// var_dump(is_int($x));

// float   Double

// echo floor((0.7 + 0.1) * 10); //   7

// 5.3   ceil(5.3)  ,  floor(5.999999)

// $name = 'ahmed' ;

// echo $name[-1];

// herodoc == ""     nowdoc  == ''

// $x = 'Sayed';
// $y = 50;

// $paragraph = <<<'senior'
// this is new paragraph
// from ahmed $x "dgjdfgfd
// [dfgdfgkdfgkdfg'dfgfdjgdfg\
// ]dfkikdfg'
// """""""""''''d'"";;'
// <h1> $x </h1>
// to group $y
// senior;

// echo $paragraph;

// null
// $database = 123 ; //  null predefined php constant  NULL
// var_dump($database);
// unset($database);
// var_dump($database);
//  is_null

// var_dump((array) null);

//    array    =>  variable  multi values

// $progLang1 = 'php'; // $progLang1[-2]  == h
// $progLang2 = 'python';
// $progLang3 = 'java';

// $arr = ['php' ,'python', 'java'];
// $arr2 = ['php2' ,'python2', 'java2'];

// // $arr[1] = 'css';
// // $arr[2] = 50 ;

// $arr[] = 'css';
// // array_push($arr, $arr2);

// var_dump(count($arr));//  length start 1      index  start 0


// echo $arr ; // error  : Array to string conversion
// echo $arr[1];




// $allProgLangs = array('php2' ,'python2', 'java2');
// echo $allProgLangs[1];// 'python2'
// $x = $allProgLangs[1];

// echo $arr[20];

// isset()
// var_dump(isset($x));


// echo '<pre>';
// print_r($arr);
// echo '</pre>';

// Associative Array

// $arr = [0 => 'php' , 1 => 'python' , 2 => 'java'];
// $arr = [ 'php' ,  'python' ,  'java'];

// $langs = ['php' , 'ruby' ,  'java'];

// $frams = ['laravel' , ' rails' , 'spring'];

// $x = ['php' => 'laravel' , 'ruby' => 'rails'];

// $x['php'];

// $degrees = [50,256,4,7,258,4,8];

// $degreesOfSTD = ['ahmed' => 50,  6585 => 'y', 'mohamed' => 256,'sayed' => 4,'gamal' => 7 ];

// echo $degreesOfSTD['mohamed'];



// // $degreesOfSTD[10] = 55;
// $degreesOfSTD[] = 5500;

// var_dump($degreesOfSTD);



// $classes = [
//   ['a' , 'b' , 'c'] ,
//   ['d' , 'e' , 'f'] ,
//   ['g' , 'h' , 'i'] ,
// ];

// var_dump($classes[2][2]);

// $classes = ['class1' , 'class2' , 'class3'];

// $users = [
//   ['name' => 'ahmed' , 'age' => 50 , 'pw' => '5455' , 'ewhrwe@gmail.com' , 123456789],
// ];

// $products = [
//   'clothes' => [
//     ['name' => 'x' ,'price' => 55 , 'date' => 'date 1'],
//     ['name' => 'y' ,'price' => 100 , 'date' => 'date 1'],
//   ],
//   'food' => [
//     [ 'x' , 55 ,  'date 1'],
//     [ 'y' , 100 ,  'date 1'],
//   ]
//   ];

// echo $products['clothes'][0]['name'];

// echo $products['food'][0][1];


// $arr = [true => 'sayed' , null => 'ahmed' , 1 => '1' , '3' => 'string 1' ];

// echo $arr['3'];
// echo $arr[3];

// $arr = [1 , 2 , 3, 40 => 4, 'num' => 5, 6, 7, 8];
// unset($arr);
// // $r = array_shift($arr);
// // $r = array_pop($arr);



// var_dump($arr);
// $arr = ['a' => 'ahmed' , 'b' => null];

// var_dump(array_key_exists('b', $arr));
// var_dump(isset($arr['b']));



// operators  +  -  * / %  **

// $x = 10.2;
// $y = 2.8;

// var_dump($x + $y);
// var_dump($x - $y);
// var_dump($x * $y);
// var_dump($x / $y);
// var_dump($x % $y);
// var_dump($x ** $y);

// var_dump(10 + 6 - 10);
//  unray operators  + -

// $x = -'a10ahmed';

// var_dump($x);

// assignment operators   =   +=   -=  /=


// $x = ($y = 10) + 5;
// // $x = $y = 10 ;

// var_dump($x, $y);
// $x = 5 ;

// // $x = $x + 10 ;

// $x += 1;

// var_dump($x);


// $x = 'ahmed' . ' sayed';

// $x .= ' and my age is 20';

// var_dump($x);//  ahmed sayed and my age is 20

// ==   ===   !=   !==  <  >  <=  <=>

// var_dump(100 == '100'); //  value
// var_dump(100 === '100'); //  value  & type



// var_dump(580 <=> 580);

//  <     =    >
//  -1    0   1



//  ternary operator


// if($is_user_logged_in == true ) {
//     echo "<button> Logout </button>";
// } else {
//     echo "<button> Login </button>";
// }

// $is_user_logged_in = true;
// $role_of_user = 'normal user';

// $status = $is_user_logged_in == true ? '<button> Logout </button>' : '<button> Login </button>';





// $status = $is_user_logged_in == true ?
//       ($role_of_user != 'admin' ?
//               '<button>logout</button>' :
//               '<button>logout</button><button>dashboard</button>')
//       : '<button> Login </button>';

// // null coalescing ??
// // falsy values   false , 0 -0  0.0  -0.0  null  []  '0'   ''        ?:

// $path = 0;
// $url = $path ?: '/';

// echo $url ;

// echo $status

// $x = 5;
// echo $x++; // post increment  first return $x  after that increment 1
// echo $x;

// $y = 10;
// echo ++$y; // pre increment
// echo $y;

// $j = null;
// echo ++$j;
// echo $j;

// $t = 'karin';
// echo ++$t;

// logical operator  ( and  &   && ) al must be true ( or |  || ) one true  ( xor ) one true but not both

// $book = true;
// $laptop = true;

// ($book || $laptop)

// $x = true;
// $y = false;
// $z = true;

// var_dump( $x && !$y || $z && false);

// 1  0000 0001

// (0 )
//  0000 0101  xor  0000 0011
//  0000 0110
// var_dump(~6 ^ 3)
// $x = 6 ;//0000 0011
// $y = 1 ;
// // >>  shift right
// var_dump($x >> $y) ;//3

// $x = 6 ;//0011 0000
// $y = 3 ;
// var_dump($x << $y);

// $x = ['aa' => 'a' ,'bb' => 'b' ,'cc' => 'c'];
// $y = ['a' => 'd' , 'b' => 'e' ,'c' => 'f', 'gg' => 'g', 'hh' => 'h'];

// var_dump($x + $y);

// $x = [ 0 => '1' , 'b' => 2];
// $y = ['0' => '1' , 'b' => 2];

// var_dump($x <> $y);
// $x = ['a' => '1' , 'b' => 2];
// $y = ['a' => 1 , 'b' => '2'];

// var_dump($x === $y);
$databaseName = 'Souq' ;
// if($databaseName == 'Souq' && 'ahmed' === 'ahmed' || true == false) {
//     echo "ahmed";
// }

// if($databaseName == 'Souq' && 'ahmed' === 'ahmed1' || true == false) {
//     echo "from true";
// } else {
//     echo 'from else';
// }

// if(){

// }elseif(){

// }else if(){

// }

$finalResult = 89 ;

// if($finalResult >= 90) {
//     echo '<h1> A </h1>';
// } elseif($finalResult < 90 && $finalResult >= 80) {
//     echo '<h1> B </h1>';
// } elseif($finalResult < 80 && $finalResult >= 50) {
//     echo '<h1> C </h1>';
// } else {
//     echo '<h1> F </h1>';
// }

// <?php if($finalResult >= 90):
//   <h1 class='' id=''> Is A+ </h1>
// <?php elseif($finalResult < 90 && $finalResult >= 80)
//   <h1> Is B+ </h1>
// <?php elseif($finalResult < 80 && $finalResult >= 50):
//   <h1> Is C+ </h1>
// <?php else :
//   <h1> Is F </h1>
// <?php endif



// while($x < 10) {
//     echo '<h1> my  number is ' . $x . '</h1>';
//     $x++;
// }


// <?php while($x < 10):

//   <div class="card" style="width: 18rem;">
//   <img src="..." class="card-img-top" alt="...">
//   <div class="card-body">
//     <h5 class="card-title">Card title <?= $x </h5>
//     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
//     <a href="#" class="btn btn-primary">Go somewhere</a>
//   </div>
// </div>
// <?php $x++
// <?php endwhile

// $x = 1 ;
// $y = 5 ;


// for($i = 0 ; $i < 5 ; $i++) {
//     echo "<h1> num is $i </h1>";
// }


// for(variable; condition ; inc or dec){

// }

// do {
//     echo 'num is' . $x . ' , ';
//     $x++;
// } while($x > 10);


// while($x !== $y) {
//     if($x == 3) {
//       continue;
//         $x++;
//     }
//     echo $x;
//     $x++;
// }

// $txt = 'ahmed sayed';

$arr = ['a' , 'b' , 'c' , 'd'];

$arrLength = count($arr);// 4

for($i = 0  ; $i < $arrLength ; $i++ , print $i) {
    echo "<h1> char is $arr[$i] </h1>";
}

// $progLangs = ['lang1' => 'java' ,  1 ,'lang2' => 'c' , 100 , 'php'];

// foreach($progLangs as $key => $lang) {

//     echo "<h1> $lang and his indx is $key </h1>";

// }

$user = [
  'name'   => 'ahmed sayed' ,
  'email'  => 'ahmed@gmail.com',
  'skills' => ['js' , 'css' , 'html']
];
// is_array($value) =  true
// foreach($user as $k => $value) {
//     if($k == 'skills') {
//         foreach($value as $x) {
//             echo "<h4> $language </h4>";
//         }
//     } else {
//         echo "<h1> $value </h1>";
//     }

//     echo "abdelrahman";
// }
// $user = [
//   'name'   => 'ahmed sayed' ,
//   'email'  => 'ahmed@gmail.com',
//   'skills' => ['js' , 'css' , 'html']
// ];
// foreach($user as $k => $value) {
//     if(is_array($value)) {

//         foreach($value as $language) {
//             echo "<h4> $language </h4>";
//         }

//     } else {

//         echo "<h1> $value </h1>";

//     }

//     echo "abdelrahman";
// }


// $todayIS = 'mon' ;

// switch($todayIS) {
//     case 'fri':
//     case 'sat':
//         echo "Day Off";
//         break;

//     case 'sun':
//     case 'mon':
//     case 'tue':
//     case 'wed':
//     case 'thu':
//         echo "w.Day";
//         break;

//     default:
//         echo " plz check day format";
// }

$todayNum = '1';

// match use ===   but switch use ==

$result = match($todayNum) {
    0 , 1 => 'dayOff',
    2 ,3 , 4 , 5 => 'working Days',
    default => 'plz check inserted value'
};

echo $result;
// include  &   require
// include_once    require_once
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


</body>
</html>
