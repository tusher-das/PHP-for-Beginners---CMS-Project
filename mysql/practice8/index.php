<?php

$password = 'ThisIsNotAStrongPassword';

echo "Befor encryption : " . $password . "<br>";

$hashFormat    = "$2y$10$";
$salt          = "inordertomakeitstrongineed22character";
$hash_and_salt = $hashFormat . $salt;
$password      = crypt($password, $hash_and_salt);

echo "After encryption : " . $password;

?>