<?php
    // simpan dengan nama koneksi.php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "novel";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db_name);

    // Check connection
    if($conn == false)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
