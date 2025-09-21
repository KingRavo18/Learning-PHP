<?php
    $username = "Bob The Builder";
    $phone_number = "123-456-789";

    //$username = strtolower($username);
    //$username = strtoupper($username);
    //$username = trim($username);
    //$username = str_pad($username, 46, "0");
    //$phone_number = str_replace("-", " ", $phone_number);
    //$username = strrev($username);
    //$username = str_shuffle($username);
    //$equals = strcmp($username, "Bob Builder");
    //$count = strlen($username);
    //$position_index = strpos($username, " ");
    //$firstname = substr($username, 0, 3);
    //$lastname = substr($username, 3);
    $fullname = explode(" ", $username);
    $name = implode(" ", $fullname);

    foreach($fullname as $word){
        echo $word . " ";
    }

    echo "<br>" . $name;