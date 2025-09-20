<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="15.checkboxes.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza"> 
        Pizza<br>
        <input type="checkbox" name="foods[]" value="Hamburger"> 
        Hamburger<br>
        <input type="checkbox" name="foods[]" value="Hotdog"> 
        Hotdog<br>
        <input type="checkbox" name="foods[]" value="Taco"> 
        Taco<br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
    if(empty($_POST["submit"])) die;
    if(empty($_POST["foods"])) die("Please check one of the food boxes");
    
    $foods = $_POST["foods"];
    foreach($foods as $food){
        echo $food . "<br>";
    }

    /*
    if(isset($_POST["pizza"])){
        echo "You like pizza <br>";
    }
    if(isset($_POST["hamburger"])){
        echo "You like hamburgers <br>";
    }
    if(isset($_POST["hotdog"])){
        echo "You like hot dogs <br>";
    }
    if(isset($_POST["taco"])){
        echo "You like hot tacos <br>";
    }
    */
            
?>