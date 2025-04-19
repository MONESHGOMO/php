<?php
/*

🟢 Basic PHP Function Challenges
Create a function that takes a name as a parameter and returns a greeting like Hello, Gomo!.

Create a function that takes two numbers and returns their sum.

Write a function that checks if a number is even or odd.

Create a function that converts Celsius to Fahrenheit.

Write a function that finds the maximum of three numbers.

🟡 Intermediate Function Challenges
Write a function that checks if a string is a palindrome (same forward and backward).

Create a function that counts vowels in a string.

Write a function that takes an array of numbers and returns the average.

Create a function that reverses a string without using built-in strrev().

Make a function that returns the factorial of a number.

🔵 Applied / Real-life Scenarios
Write a function that generates a unique invoice number using date and a random number.

Create a function that validates an email address.

Make a function that formats a number as currency (e.g., 1234.5 → ₱1,234.50).

Create a function that takes a full name and returns only the initials.

Write a function that returns the number of days between two dates.
*/


// Create a function that takes a name as a parameter and returns a greeting like Hello, Gomo!.

      function greeting($name){
    return "Hello,".$name."!";
}

echo (greeting("Gomo"));

// Create a function that takes two numbers and returns their sum.

$num1 = 10;
$num2 = 10;

function addition($num1,$num2){
    return $num1 + $num2;
}

echo (addition($num1,$num2)); 

// Write a function that checks if a number is even or odd.

function checkEvenOdd($userInput)
{
    if ($userInput % 2 == 0) {
        return "It is  a even number ";
    } else {
        return "It is a Odd number ...";
    }

}

$input = 134;
print (checkEvenOdd($input));

// Create a function that converts Celsius to Fahrenheit.

/*
formula : doubling the Celsius temperature and then adding 30.
*/

function celsiusToFahrenheit($temperature){

    $doubleTheTemperature = $temperature + $temperature;
    return $doubleTheTemperature + 30;

}

$temperature = 20;
$CelsiusToFahrenheitAns = celsiusToFahrenheit($temperature);
print($CelsiusToFahrenheitAns);


// Write a function that finds the maximum of three numbers.

function maxOfThreeNumbers($num1,$num2,$num3){
    
    if($num1>$num2 && $num1>$num3){
        return $num1;
    }
    else if ($num2>$num1 && $num2>$num3){
        return $num2;
    }
    else{
        return $num3;
    }
}

$num1=10;
$num2=20;
$num3 = 28;

$solution = maxOfThreeNumbers($num1, $num2, $num3);
print ($solution . " " ."is the max of all three numbers ");


// Write a function that checks if a string is a palindrome (same forward and backward).

function palindromeOfAString($givenName){

    $name = $givenName;
    $revName = "";
    
    $length = strlen($name)-1;
    
    for ($i = $length; $i >= 0;$i--){
        $revName =$revName. $name[$i];
    }
    
    if($name == $revName){
        return "It is a palindrome";
    }
    else{
        return "it is not a palindrome";
    }
}

$StringSolution = palindromeOfAString("gomo");
print ($StringSolution);


// Create a function that counts vowels in a string.

function countOfVowels($givenString){

    $count = 0;
    $userGivenString = strtolower($givenString);

    $vowels = ['a', 'e', 'i', 'o', 'u'];

    for ($i = 0; $i <strlen($userGivenString); $i++) {
        if(in_array($userGivenString[$i],$vowels)){
            $count++;
        }
    }

    return $count;

}

$countMatch = countOfVowels("education");
print ($countMatch);


// Write a function that takes an array of numbers and returns the average.

function averageInArray($givenArray){

    $sum = 0;
    $divisor = count($givenArray);

    for ($i = 0; $i < $divisor; $i++) {
        $sum = $sum + $givenArray[$i];
    }

    return $sum / $divisor;
}

$array = [1, 2, 3, 4, 5];
print (averageInArray($array));

// Create a function that reverses a string without using built-in strrev().

function reverseA_String($givenString){

    $name = $givenString;
    $revName = "";

    $length = strlen($name) - 1;

    for ($i = $length; $i >= 0; $i--) {
        $revName = $revName . $name[$i];
    }

    return $revName;
}

print (reverseA_String("moni"));

// Make a function that returns the factorial of a number

function factorialOfANumber($givenNumber)
{
    $result = 1;

    for ($i = 1; $i <= $givenNumber; $i++) {
        $result *= $i;
    }

    return $result;
}

print(factorialOfANumber(5)); 

    ?>          