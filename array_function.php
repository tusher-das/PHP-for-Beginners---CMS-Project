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

    $myArr = [101, 3, 55, 20, 30, 40, 50];

    echo max($myArr);
    echo "<br>";

    echo min($myArr);
    echo "<br>";

    print_r($myArr);
    echo "<br>";

    sort($myArr);
    print_r($myArr);
    echo "<br>";



    ?>

</body>

</html>