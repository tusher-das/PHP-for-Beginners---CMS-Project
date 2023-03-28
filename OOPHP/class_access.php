<?php

class Car
{
    public $wheel = 4;
    protected $hood = 1;
    private $engine = 11;
    var $door = 4;

    function createDoors()
    {
        $this->door = 6;
    }

    function showEngine()
    {
        echo $this->engine;
    }
}

$car1 = new Car();

class Semi extends Car
{
    function showHood()
    {
        echo $this->hood;
    }
}
$semi1 = new Semi();
$semi1->showEngine();





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