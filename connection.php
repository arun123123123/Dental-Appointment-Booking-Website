<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db_name  = "db1";

    $conn = mysqli_connect($hostname,$username,$password,$db_name);

    if(!$conn){
        echo"not successful";
    }