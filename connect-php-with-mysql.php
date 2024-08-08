<?php
    $host = "localhost";
    $username = "root";
    $password = null;
    $dbname = "college";

    $connection = new mysqli($host, $username, $password, $dbname);
    if ($connection -> connect_error) {
        die("Database Connection Error: " . $connection->connect_error);
    } else {
        echo "Database Connected.";
    }

    echo "<hr>";
    $result = $connection->query("SHOW TABLES")->fetch_all();
    echo "<pre>";
    print_r($result);
    echo "<pre>";
?>