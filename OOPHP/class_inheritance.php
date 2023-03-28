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

class Plane extends Car
{
    var $wheel = 20;
}

$plane1 = new Plane();
$plane1->start();
echo $plane1->wheel;



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