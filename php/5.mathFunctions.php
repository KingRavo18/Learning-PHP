<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    <form action="5.mathFunctions.php" method="POST">
        <label>x:</label>
        <input type="text" name="x"><br>
        <label>y:</label>
        <input type="text" name="y"><br>
        <label>z:</label>
        <input type="text" name="z"><br>
        <input type="submit" value="total"><br>
    </form>
    -->
    <form action="5.mathFunctions.php" method="POST">
        <label>Radius:</label>
        <input type="text" name="radius">
        <input type="submit">
    </form>
</body>
</html>
<?php
    //$x = $_POST["x"];
    //$y = $_POST["y"];
    //$z = $_POST["z"];
    //$total = null;

    //$total = abs($x);
    //$total = round($x);
    //$total = floor($x);
    //$total = ceil($x);
    //$total = sqrt($x);
    //$total = pow($x, $y);
    //$total = max($x, $y, $z);
    //$total = min($x, $y, $z);
    //$total = pi();
    //$total = rand(1, 6);

    //echo $total;

    $radius = $_POST["radius"];

    $circumference = null;
    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);
    echo "Circumference = {$circumference} cm <br>";

    $area = null;
    $area = pi() * pow($radius, 2);
    $area = round($area, 2);
    echo "Area = {$area} cm^2 <br>";

    $volume = null;
    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);
    echo "Volume = {$volume}cm^3 <br>";
?>