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

    $numbers = [10, 20, 49];
    echo $numbers[2] . "<br>";
    print_r($numbers);
    echo ("<br>");

    $names = ["first_name" => 'Tusher', 'last_name' => 'Das'];
    print_r($names);
    echo "<br>";
    echo $names['first_name'] . ' ' . $names['last_name'];

    ?>

</body>

</html>