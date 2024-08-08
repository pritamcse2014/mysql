<?php
    $host = "localhost";
    $username = "root";
    $password = null;

    try {
        $connection = new PDO("mysql:host=$host;dbname=college", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Database Connected.";
    } catch (PDOException $error) {
        die("Database Connection Error: " . $error->getMessage());
    }

    echo "<hr>";
    
    try {
        $result = $connection->query("SHOW TABLES");
        while ($row = $result->fetch(PDO::FETCH_NUM)) {
            echo "<pre>";
            print_r($row);
            echo "<pre>";
        }
    } catch (PDOException $error) {
        die("Query Error: " . $error->getMessage());
    }
?>