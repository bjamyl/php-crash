<?php


$fruits = ['orange', 'mango', 'apple'];

// Get length
// echo count($fruits);

// Search array
// var_dump(in_array('apple',$fruits));

// Add to array
// $fruits[] = 'pineapple';
// array_push($fruits, 'strawberry');
// array_unshift($fruits, 'guava');

// Remove from array
// array_pop($fruits);
// array_shift($fruits);
// unset($fruits[0]);

// Split into 2 chunks

// $chunked_array = array_chunk($fruits, 2);

// print_r($chunked_array);

$arr1 = [1,2,3];
$arr3 = [4,5,6];

$arr2 = array_merge($arr1, $arr3);
$arr4 = [...$arr1, ...$arr2];

print_r($arr4);

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);

$flipped = array_flip($c);

$keys = array_keys($c);

$numbers = range(1,20);


// Mapping through an array
$newNumbers = array_map(function($number){
    return "Number $number";
}, $numbers);

//Filter an array
$lessThan10 = array_filter($numbers, fn($number)=> $number <= 10);


// Reduce an array







