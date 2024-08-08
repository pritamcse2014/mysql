<?php
    $host = "localhost";
    $username = "root";
    $password = null;

    $connection = new PDO("mysql:host=$host;dbname=college", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Database Connected.";
?>