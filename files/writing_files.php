<?php

$file = "example.txt";

if ($handle = fopen($file, 'w')) {
    fwrite($handle, "I don't love PHP but need to learn it.");


    fclose($handle);
} else {
    echo "The applicaton was not able to write on the file";
}

?>