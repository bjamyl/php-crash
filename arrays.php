<?php
// Simple Array
$numbers = [1,44,5,34];
$fruits = array('apple','banana', 'pear');

// Associative Array
$colours = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

$people = [
    [
        'first_name' => 'Jamil',
        'last_name' => 'Alhassan',
        'email' => 'jamil@gmail.com'
    ],
    [
        'first_name' => 'Emily',
        'last_name' => 'Addo',
        'email' => 'mimi@gmail.com'
    ],
    [
        'first_name' => 'Shahid',
        'last_name' => 'Adams',
        'email' => 'jonboy@gmail.com'
    ]
];


echo $people[1]['first_name'];

var_dump(json_encode($people));

