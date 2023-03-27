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

    $isPHPLove = "not sure";
    if ($isPHPLove == "yes") {
        echo "I love PHP <br>";
    } elseif ($isPHPLove == "not sure") {
        echo "I am not sure <br>";
    } else {
        echo "I don't love PHP <br>";
    }

    for ($i = 1; $i <= 10; $i++) {
        echo $i . "<br>";
    }

    $number = 500;
    switch ($number) {
        case 10:
            echo "Number is 10<br>";
            break;
        case 20:
            echo "Number is 20<br>";
            break;
        case 30:
            echo "Number is 30<br>";
            break;
        case 40:
            echo "Number is 40<br>";
            break;
        case 50:
            echo "Number is 50<br>";
            break;
        default:
            echo "Do not find anything";
            break;
    }



    ?>

</body>

</html>