<?php
    $dbname = 'foodorderingsystem';
    $host = 'localhost';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($host, $username, $password, $dbname);
    if($conn->connect_error){
        die("Connection Error".$conn->connect_error);
    }
?>