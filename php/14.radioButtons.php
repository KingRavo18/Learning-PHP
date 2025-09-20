<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="14.radioButtons.php" method="POST">
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">
        American Express<br>
        <br>
        <input type="submit" name="confirm" value="Confirm">
    </form>
</body>
</html>
<?php
    if(empty($_POST["confirm"])) die;
    if(empty($_POST["credit_card"])) die("Please select a payment method");
    $credit_card = $_POST["credit_card"];
    echo "You selected {$credit_card}";
?>