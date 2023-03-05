<?php


$file = 'extras/users.txt';

if(file_exists($file)){
    // echo readfile($file);
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'Evans' . PHP_EOL . 'Shahid' . PHP_EOL . 'Emily';
    fwrite($handle, $contents);
    fclose($handle);
}