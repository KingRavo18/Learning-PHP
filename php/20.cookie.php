<?php
    // cookie = Information about a user stored in a user's web-browser
    //          targeted advertisements, browsing preferences, and other
    //          non-sensitive data

    setcookie("favoriteFood", "pizza", time() - 0, "/");
    setcookie("favoriteDrink", "water", time() + (86400 * 4), "/");
    setcookie("favoriteDessert", "ice cream", time() + (86400 * 3), "/");

    foreach($_COOKIE as $key => $value){
        echo "{$key} => {$value} <br>";
    }

    if(isset($_COOKIE["favoriteDrink"])){
        echo "You like {$_COOKIE["favoriteDrink"]}.";
    }
    else{
        echo "I don't know your preferences";
    }