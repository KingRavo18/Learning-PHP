<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="9.forLoops.php" method="POST">
        <label>Enter a number to count down from </label>
        <input type="number" name="counter">
        <input type="submit" value="start">
    </form>
</body>
</html>

<?php

    // for loop = repeat some code a certain # of times

    $counter = $_POST["counter"];

    for($i = $counter; $i >= 0; $i--){
        echo $i . "<br>";
    }

?>

