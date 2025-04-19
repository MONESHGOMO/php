<?php 

$name="nerkgn";

// print("Hello $name welcome to the world of PHP!");
//   print('<h1>Hello</h1>' .$name .'<h1>welcome to the world of PHP!</h1>');

$name = 'Linus';
echo '<h1>Hello </h1>' .$name;
echo "<h1>Hello $name</h1>";




// data types 

$age = 4;
print($age.'<br>');

$name = "Gomo";
print ($name.'<br>');

$x = 5342;
var_dump($x. '<br>'); // prints the type of the variable and its value

$x1 = 10.365;
var_dump($x1. '<br>');


$x2 = true;
var_dump($x2. '<br>');

// arrays

$cars = array("Volvo", "BMW", "Toyota");
// print_r(value: $cars.'<br>');
// echo $cars[0]. '<br>';
echo '<pre>';
print_r($cars);
echo '</pre><br>';


?>

