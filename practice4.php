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

    echo rand(1, 100);
    echo "<br>";

    echo strlen("This is for testing perpose");
    echo "<br>";

    $myArr = [1, 0, 232, 8, 38, 4];
    sort($myArr);
    print_r($myArr);

    ?>

</body>

</html>