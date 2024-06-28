<?php

// require_once('main.php');
// functions  {}   function anyName(){}

// function __print_name($first, $last)
// {
//     $firstName = $first;
//     $lastName  = $last;

//     echo "my name is $first $last";
// }


// __print_name('ahmed', 'sayed');

// function sum($num1, $num2)
// {
//     return $num1 + $num2;
// }

// $r = sum(10, 5);

// echo $r + 14;

// _printName();

// function _printName()
// {
//     echo "ahmed";
// }
// var_dump(_printName());

// x();
// if(true) {
//     function x()
//     {
//         echo "ahmed";
//     }
// }


// function x()
// {
//     echo "this is from X fun";

//     function y()
//     {
//         echo "this is from Y fun";
//     }

// }


// y();
// x();


// function x(): mixed
// {
//     return  1;
// }

// var_dump(x());



// function sum(int $x = 5, int|float $y): int|float
// {
//     return $x + $y;
// }

// echo sum(4);


// function x(&$a, $b)
// {
//     if($a % 2 != 0) {
//         $a /= 2 ;//3.5
//     }

//     return $a + $b;
// }

// $a = 7 ;
// $b = 5 ;

// echo x($a, $b);
// var_dump($a, $b);


// function sum($x, $y, ...$nums)
// {
//     $total = 0;

//     $total = $x + $y;

//     foreach($nums as $num) {
//         $total += $num;
//     }

//     return $total;
// }

// function sum($x, $y, $z)
// {
//     return $x - $y * $z;
// }

// $ahmedArray = ['y' => 100 , 'x' => 20 , 'z' => 2];

// echo sum(...$ahmedArray);

// echo sum(5, 6, 5, 8);


// function sum($x= 50, $y )
// {
//     return $x - $y;
// }


// echo sum(y : 10);

// setcookie('firstName', 'ahmed sayed',secure :true);

// $x = 5 ;

// require_once "file1.php";

// function sum()
// {
//     global $x ;

//     $x = 666;
//     echo $x;
// }

// sum();

// var_dump($GLOBALS);
// function test()
// {
//     static $x = 1 ;
//     $x++;
//     return $x;
// }

// echo test(); // 2
// echo test(); // 3
// echo test(); // 4
// echo test(); // 5
// echo test(); // 6


// variable function
// function sum(int ...$nums)
// {
//     echo array_sum($nums);
// }


// function msg()
// {
//     echo "try again";
// }

// $x = 'minus';

// $x(1, 2, 3, 4, 5);

// ananymous function  must be ended with ;

// echo and print

// $sum = function ($x, $y) {
//     echo $x + $y ;
// };
// $sum(1, 2);
// $num = 10 ;

// $fn = function (int $x = 5, int $y = 1) use ($num): int {
//     $num += 50 ;
//     return $x + $y * $num ;
// };

// echo $fn();

// var_dump($num);

//  fn(arg) => expression
$cv = fn ($x, $y) => $x + $y;

echo $cv(10, 70);

$arr = [1,2,3];
$x = 10;
$arrAfterMap = array_map(fn ($elm) => $elm * $x, $arr);// arrow

$arrAfterMap = array_map(function ($elm) {
    $r = 10 ;
    $hasd = 5;
    return $elm * 100 ;
}, $arr);// callback

var_dump($arr);
var_dump($arrAfterMap);
var_dump($arr);
