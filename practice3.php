<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    function sum($num1, $num2)
    {
        return $num1 + $num2;
    }

    $result = sum(20, 40);
    echo "Sum of two number is " . $result . "<br>";

    ?>

</body>

</html>