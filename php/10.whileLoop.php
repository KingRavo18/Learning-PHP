<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="10.whileLoop.php" method="POST">
        <input type="submit" name="stop" value="stop">
    </form>
</body>
</html>
<?php

    // while loop = do some code infinetely while some 
    //              condition remains true

    $counter = 0;
    while($counter <= 10){
        echo $counter . "<br>";
        $counter++;
    }

    echo "<br>";

    $seconds = 0;
    $running = true;

    while($running){

        if(isset($_POST["stop"])){
            $running = false;
        }
        else{
            //wait 1 second
            $seconds++;
            echo $seconds . "<br>";
        }
    }

?>