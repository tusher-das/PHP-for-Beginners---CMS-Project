<?php

class Car
{
    var $wheel = 4;
    var $hood = 1;
    var $engine = 1;
    var $door = 4;
    function start()
    {
        $this->wheel = 10;
    }

    function createDoors()
    {
        $this->door = 6;
    }
}

$car1 = new Car();
$car2 = new Car();

echo $car1->wheel . "<br>";


echo $car2->wheel = 10 . "<br>";
$car2->createDoors();
echo $car2->door;


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