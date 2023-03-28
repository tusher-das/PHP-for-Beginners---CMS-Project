<?php session_start();

if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $id   = $_GET['id'];
    echo "Hello " . $name . "! Your id is " . $id . "<br>";
}

setcookie("cookie1", "This is cookie value", time() + 60 * 60 * 24 * 7);
if (isset($_COOKIE['cookie1'])) {
    echo "Your cookie is : " . $_COOKIE['cookie1'] . "<br>";
}


$_SESSION['message'] = "Hi there, How are you ?";
if (isset($_SESSION['message'])) {
    echo "Your session is : " . $_SESSION['message'] . "<br>";
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
    <a href="index.php?name=tusher&id=001">CLICK HERE</a>
</body>

</html>