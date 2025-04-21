<?php

// D:\xampp\htdocs\PhpDev\php\Arrays_In_PHP.php
// hetrogeneous array
$names = array("monesh",1,true,"gomo","polite");

echo $names[0];
print_r($names);

echo ("<br>");
foreach($names as $name){
    echo($name.'<br>');
}


// associative array (HashMap)

$grades = array("MT"=>"A","DK"=>"A");

foreach($grades as $keys => $Values ){
    echo($keys .':'. $Values . '<br>');
}

echo ("<br>");

echo (count($grades));

echo ("<br>");




?>