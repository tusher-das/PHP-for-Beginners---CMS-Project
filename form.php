<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $minimum = 5;
    $maximum = 10;
    $name    = ['Tusher', 'Student', "Peter", 'Samid', 'Mohad', "Maria", "Jane"];

    if (strlen($username) < $minimum) {
        echo "Username has to be longer then five.";
    }
    if (strlen($username) > $maximum) {
        echo "Username has to be less then ten.";
    }

    if (!in_array($username, $name)) {
        echo "Sorry you are not allowed! <br>";
    } else {
        echo "Welcome <br>";
    }
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

    <form action="form.php" method="post">
        <input type="text" name="username" id="" placeholder="Enter your username" required><br>

        <input type="password" name="password" id="" placeholder="Enter your password" required><br>

        <input type="submit" name="submit"><br>
    </form>

</body>

</html>