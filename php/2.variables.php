<?php
    // variable = a reusable container that holds data
    //            string, integer, float, boolean

    //STRING

    $name = "Spongebob Squarepants";
    $food = "pizza";
    $email = "spinge@gmail.com";

    echo "Hello {$name} <br>";
    echo "You like {$food} <br>";
    echo "Your email is {$email} <br>";

    //INTEGER

    $age = 21;
    $users = 2;
    $quantity = 3;

    echo "You are {$age} years old <br>";
    echo "There are {$users} users online <br>";
    echo "You would like to buy {$quantity} items <br>";

    //FLOAT

    $gpa = 2.5;
    $price = 4.99;
    $taxRate = 5.1;

    echo "Your gpa is {$gpa} <br>";
    echo "Your pizza is \${$price} <br>";
    echo "The sales tax rate is: {$taxRate}% <br>";

    //BOOLEAN

    $employed = true;
    $online = false;
    $for_sale = true;

    echo "Online status: {$online} <br><br>";


    $total = null;
    echo "You have ordered {$quantity}x {$food}s <br>";
    $total = $quantity * $price;
    echo "Your total is: \${$total}";
?>