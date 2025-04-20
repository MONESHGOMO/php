<?php


for ($i = 0; $i <= 5;$i++){
    echo "for loop".'<br>';
}


$count = 10;
while($count>0){
    echo ("while loop" . '<br>');
    $count--;
}

$i = 0;
do {
    echo "Value: $i<br>";
    $i++;
} while ($i < 5);


$colors = array("Red", "Green", "Blue");

foreach ($colors as $color) {
    echo $color.'<br>';
}

// similar to HashMap in java
$person = array("name" => "Gomo", "role" => "Dev");

foreach ($person as $keys => $values) {
    echo "$keys: $values<br>";
}

/*

🔹 Easy level

Print numbers from 1 to 10 using a for loop.

Print only even numbers between 1 and 20 using a while loop.

Print your name 5 times using a do...while loop.

Given an array:
$colors = array("Red", "Green", "Blue", "Yellow");
Use a for loop to print a star pattern:

*
**
***
****
*****

🔹 Intermediate Level

Print numbers from 1 to 50, but:  Skip multiples of 5 using continue and Stop the loop completely if the number is 42 using break

Given an associative array:

$student = array("name" => "Gomo", "course" => "PHP", "level" => "Beginner");
Print each key-value pair using foreach.

Use a nested for loop to print a multiplication table (1 to 5).

Write a while loop that sums all numbers from 1 to 100 and prints the total.

Loop through this array and count how many numbers are greater than 10:

$numbers = array(3, 15, 8, 22, 5, 17);
🔹 Bonus Challenge
Create a for loop that prints this pattern:

1
1 2
1 2 3
1 2 3 4
Loop through a multidimensional array of students and their scores, and print each student’s name with their average score.
]


*/
//Print numbers from 1 to 10 using a for loop.


for ($i = 1; $i <= 10;$i++){
    echo $i." ";
}

echo ("<br>");
// Print only even numbers between 1 and 20 using a while loop.

echo ("Q 2");
echo ("<br>");

for ($i = 1; $i <= 20; $i++) {
    if($i%2==0){
        echo $i . " ";
    }
    else{
        continue;
    }
}
echo ("<br>");

// Print your name 5 times using a do...while loop.

$name = "friends";
$count=0;
do {
    echo ($name . '<br>');
    $count++;
}
while ($count < 5);

echo('<br>');

// Use a foreach loop to print each color.


$colors = array("Red", "Green", "Blue", "Yellow");

foreach($colors as $color){
    echo ($color . '<br>');
}

echo ('<br>');


// Use a for loop to print a star pattern:
echo ("Pattern printing..." . '<br>');

for ($i = 1; $i <= 5;$i++){
    for($j=1;$j<=$i;$j++){
        echo ("*");
    }
    echo ("<br>");
}

echo ('<br>');

// Print numbers from 1 to 50, but:  Skip multiples of 5 using continue and Stop the loop completely if the number is 42 using break

for ($i = 1; $i <= 50; $i++) {
    if($i==42){
        break;
    }
    else{
        if($i%5!=0){
            echo ($i . '<br>');
        }
        else{
            continue;
        }
    }
    
}
echo ('<br>');

$student = array("name" => "Gomo", "course" => "PHP", "level" => "Beginner");
// Print each key-value pair using foreach.

foreach($student as $keys=>$values){
    ECHO("$keys: $values<br>");
}

// Use a nested for loop to print a multiplication table from 1 to 5

echo ('<br>');


/*
1  2  3  4  5
2  4  6  8 10
3  6  9 12 15
4  8 12 16 20
5 10 15 20 25

*/

for ($i = 1; $i <= 5;$i++){
    for($j=1;$j<=5;$j++){
        echo ($i * $j . " ");
    }
    echo ("<br>");
}

echo("<br>");
// Write a while loop that sums all numbers from 1 to 100 and prints the total.

$count=1;
$sum = 0;

while($count<101){
    $sum += $count;
    $count++;
}
print ($sum);

echo ("<br>");

// Loop through this array and count how many numbers are greater than 10:

$numbers = array(3, 15, 8, 22, 5, 17);
$count=0;
$checker=10;
for ($i = 0; $i <count($numbers); $i++) {
            if($numbers[$i] > $checker){
                    $count++;
            }
            else{
                     continue;
            }
}

print ($count . "  values are greater than 10 in the given array ");

echo ("<br>");
// Create a for loop that prints this pattern:

/*
    1
    1 2
    1 2 3
    1 2 3 4
*/

for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo ($j. " ");
    }
    echo ("<br>");
}
echo("<br>");

// Loop through a multidimensional array of students and their scores, and print each student’s name with their average score.
$class = [
    ["name" => "Gomo", "scores" => [80, 90, 85]],
    ["name" => "Lebo", "scores" => [70, 75, 68]],
    ["name" => "Tumi", "scores" => [95, 88, 92]],
];

foreach ($class as $pupil) {
    $studentName = $pupil["name"];          
    $marks = $pupil["scores"];             
    $sum = 0;

    foreach ($marks as $mark) {          
        $sum += $mark;
    }

    $average = $sum / count($marks);
    echo "$studentName: $average<br>";      
}

?>