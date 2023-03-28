<?php

class Car
{
    function start()
    {
        echo "brommmmmmmmm...";
    }
}

if (method_exists("Car", "start")) {
    echo "Yessssss";
} else {
    echo "Nooooooo";
}

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