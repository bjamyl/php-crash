<?php
// for($x=0; $x <=15; $x++){
//     echo "Number $x <br/>";
// }

//While loop
// $number = 1;

// while($number <= 15){
//     echo "Number $number <br/>";
//     $number+=1;
// } 

// // Do while loop

// $chosen = 9;
// do {
//     echo "Number $chosen <br/>";
//     $chosen ++;
// } while ($chosen <= 10);


$singers = ['Adele', 'Ed', 'Stormzy'];

// for($x=0; $x < count($singers); $x++){
//     echo $singers[$x];
// }

foreach($singers as $post){
    echo $post;
}

foreach($singers as $index => $singer){
    echo "$index -  $post <br/>";
}

$person =  [
    'first_name' => 'Emily',
    'last_name' => 'Addo',
    'email' => 'mimi@gmail.com'
];

foreach($person as $key => $value){
    echo "$key - $value <br/>";
};