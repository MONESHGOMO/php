
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello</title>
</head>
<body>
    <h1>Hello world</h1>
    <?php

/*
$name="monesh";
echo("name :" . $name."<br>"); // <br> to usee instead of ln
echo ( "hello"."<br>");


$cars =array("BMW","MERCEDES-BENZ");

//echo("". $cars."<br>"); 
print_r($cars);
echo ("<br>");
    var_dump($cars);

  */

  class Car{

        public $tata;
        public $varient;

        public function __construct($tata, $varient)
        {
            $this->tata = $tata;    
            $this->varient = $varient;
        }

        public function getMessage(){
            return "Tata : " . $this->tata . "<br>"."Varient : " . $this->varient;
        }


  }

    $myCar = new Car("Harrier", "Dark Edition");
    echo("". $myCar->getMessage());  // -> similar to (.) operator in java to access the methods inside the instance of a class
?>
</body>
</html>