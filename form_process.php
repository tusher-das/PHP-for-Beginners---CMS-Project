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