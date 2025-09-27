<?php
    include("24.database.php");

    $username = "Patrick";
    $password = "clarinet2";
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password_hash')";

    try{
        mysqli_query($conn, $sql);
        echo "User is registered";
    }
    catch(mysqli_sql_exception){
        echo "Could not register user";
    }
    mysqli_close($conn);