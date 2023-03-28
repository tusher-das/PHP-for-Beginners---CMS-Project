<?php

$file = "example.txt";

if ($handle = fopen($file, 'r')) {
    $content = fread($handle, filesize($file)); //each bite equals a charactre;

    echo $content;

    fclose($handle);
} else {
    echo "The applicaton was not able to read on the file";
}

?>