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

$degrees = [50,256,4,7,258,4,8];

$degreesOfSTD = ['ahmed' => 50,  6585 => 'y', 'mohamed' => 256,'sayed' => 4,'gamal' => 7 ];

echo $degreesOfSTD['mohamed'];



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



var_dump(580 <=> 580);

//  <     =    >
//  -1    0   1


?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>Lorem ipsum dolor sit amet.</p>

</body>
</html>
