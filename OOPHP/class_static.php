<?php

class Car
{
    static $wheel = 4;
    var $door = 4;

    function showWheel()
    {
        echo Car::$wheel;
    }

    function createDoors()
    {
        $this->door = 6;
    }
}

$car1 = new Car();
// echo $car1->wheel;
$car1->showWheel();


echo Car::$wheel;




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>