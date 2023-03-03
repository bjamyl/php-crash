<?php


//Set cookie
setcookie('name', 'Brad', time() + 86400 * 30);

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

// Remove cookie

setcookie('name', '', time() - 86400);