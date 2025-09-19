<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="12.associativeArrays.php" method="POST">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>
<?php
    // associative array = An array made of key=>value pairs

    // countries => capitals
    // id => username
    // item => price

    $capitals = array("usa" => "Washington D.C.", 
                      "japan" => "Tokyo", 
                      "south korea" => "Seoul", 
                      "india" => "New Delhi");

    $capital = strtolower($_POST["country"]);
    if(isset($capitals[$capital])){
        echo "The capital is " . $capitals[$capital];
    }
    else{
        echo "No country by that name exists";
    }
    

    /*
    echo $capitals["Japan"] . "<br>";

    $capitals["USA"] = "Las Vegas";
    $capitals["China"] = "Beijing";
    array_pop($capitals);
    array_shift($capitals);
    $keys = array_keys($capitals);
    $values = array_values($capitals);
    $capitals = array_flip($capitals);
    $capitals = array_reverse($capitals);
    echo count($capitals) . "<br>";

    foreach($capitals as $key => $value){
        echo "{$key} => {$value} <br>";
    }

    echo "<br>";

    foreach($keys as $key){
        echo $key . "<br>";
    }

    echo "<br>";

    foreach($values as $value){
        echo $value . "<br>";
    }
    */