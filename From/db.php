<?php

    $servername = "localhost";
    $username = "root";
    $password = "Atharv@0825";
    $databasename = "studentDB";

    $conn = new mysqli($servername, $username, $password, $databasename);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Connected successfully";
    }
?>    