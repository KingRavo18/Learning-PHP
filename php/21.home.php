<?php
    session_start();

    echo $_SESSION["username"];
    echo $_SESSION["password"];

    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: 21.session.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the home page<br>
    
    <form action="21.home.php" method="POST">
        <input type="submit" name="logout" value="Log Out">
    </form>
</body>
</html>