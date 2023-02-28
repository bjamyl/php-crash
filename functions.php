<?php

function show_name($email){
    echo "My name is Jamil and my email is $email";
};

show_name('jamil@gmail.com');


function sum($n1, $n2){
    return $n1 + $n2;
};

$number = sum(2,4);
echo $number;

$subtract = function($n1, $n2){
    return $n1 - $n2;
};

echo $subtract(10,5);

// Arrow functions
$multiply = fn($n1, $n2) => $n1 * $n2;

