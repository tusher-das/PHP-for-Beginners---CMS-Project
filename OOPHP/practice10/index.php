<?php

class Dog
{
    var $eyeColors = "Blue";
    var $nose = "Wide";
    var $furColor = "Brown";

    function showAll()
    {
        echo "Eye color : " . $this->eyeColors . "<br>";
        echo "Nose : " . $this->nose . "<br>";
        echo "Fur color : " . $this->furColor . "<br>";
    }
}

$pitbull = new Dog();
$pitbull->showAll();

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