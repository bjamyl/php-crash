<?php
$age = 20;

if($age >= 18){
    echo 'You are old enough';
} else{
    echo 'You are not old enough to vote';
};


$t = date("H");

if($t < 12){
    echo 'Good Morning';
} elseif($t < 17){
    echo 'Good Afternoon';
} else {
    echo 'Good Evening';
};


$posts = ['First Post'];

if(!empty($posts)){
    echo $posts[0];
} else {
    echo 'No Posts';
}

// Ternary operator
echo !empty($posts) ? $posts[0] : 'No Posts';

$firstpost = $posts[0] ?? null;

$favcolor = 'red';

switch($favcolor){
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
    echo 'Your favorite color is not red, green or blue';
}