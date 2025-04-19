<?php

class Car {
     public $color;
     public $model;

     public function __construct($color,$model){
        $this->color = $color;
        $this->model = $model;
     }

    public function message(){
        return "My car is a " . $this->color . " " . $this->model . "!";    
    }

}

$myCar = new Car("blue", "X5");
var_dump(value: $myCar);

// php code to find even or odd 

$firstNumber = 10;
$secondNumber = 20;
$sum= $firstNumber + $secondNumber;
$divisor=2;

if ($sum % $divisor == 0) {
    echo "The sum of $firstNumber and $secondNumber is even";
}
else {
    echo "The sum of $firstNumber and $secondNumber is odd";
}


?>