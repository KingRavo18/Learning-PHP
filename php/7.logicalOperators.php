<?php
    // Logical operators = combine conditional statements
    // if(condition1 && condition2)

    // && = True if bother conditions are true
    // || = True if at least one condition is true
    // ! = True if false. False if true.

    $temp = 25;
    $cloudy = true;

    /*
    if($temp >= 0 && $temp <= 30){
        echo "The weather is ok.";
    }
    else{
        echo "The weather is bad.";
    }
    */

    if($temp < 0 || $temp > 30){
        echo "The weather is bad.";
    }
    else{
        echo "The weather is ok.";
    }

    echo "<br>"; 

    if(!$cloudy){
        echo "It's sunny";
    }
    else{
        echo "It's cloudy";
    }

    echo "<br>";

    $age = 20;
    $citizen = true;

    if(!$age >= 18 || !$citizen){
        echo "You cannot vote";
    }
    else{
        echo "You can vote";
    }

    echo "<br>";

    $child = true;
    $senior = false;
    $ticket = null;

    if($child || $senior){
        $ticket = 10;
    }
    else{
        $ticket = 15;
    }

    echo "The ticket price is \${$ticket}";