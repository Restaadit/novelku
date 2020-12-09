<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "novelku";

    //create connection
    $conn = new mysqli($servername, $username, $password, $db_name);

    //check connection
    if($conn == false)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>