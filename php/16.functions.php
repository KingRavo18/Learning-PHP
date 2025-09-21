<?php
    // function = write some code once, reuse when you need it
    //            type () after function name to invoke
    //            ex. add() subtract() multiply() divide()

    function happyBirthday($first_name, $years){
        echo "Happy Birthday, {$first_name}! <br>";
        echo "You are {$years} years old <br><br>";
    }

    happyBirthday("Spongebob", 3);
    happyBirthday("Patrick", 34);
    happyBirthday("Squidward", 4);

    function isEven(int $number){
        return $number % 2 === 0 ? "The number {$number} is even <br><br>" : "The number {$number} is odd <br><br>";
    }

    echo isEven(5);

    function hypotenuse($a, $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    echo hypotenuse(3, 4);