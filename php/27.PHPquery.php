<?php
    include("24.database.php");

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row["username"] . "<br>";
            echo $row["reg_date"] . "<br>";
        }
    }
    else{
        echo "No user found";
    }

    mysqli_close($conn);