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

    echo "<h1>Comparison Operators</h1>";

    echo "equal == <br>";
    echo "identical === <br>";
    echo "compare > < >= <= <> <br>";
    echo "not equal != <br>";
    echo "not identical !== <br>";


    echo "<h1>Logical Operators</h1>";

    echo "And && <br>";
    echo "Or || <br>";
    echo "Not ! <br>";

    ?>


    <?php
    if (4 === "4" && 5 < 10) {
        echo "it is true";
    }

    ?>

</body>

</html>