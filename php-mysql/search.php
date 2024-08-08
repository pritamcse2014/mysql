<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MYSQL</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="search" id="search" placeholder="Enter Your Text">
        <button>Search</button>
    </form>
    <br>
</body>
</html>

<?php
    include ("./config.php");
    if (isset($_POST['search'])) {
        $search = $_POST['search'];
        // $student = $connection->prepare("SELECT * FROM students WHERE name='$search'");
        $student = $connection->prepare("SELECT * FROM students WHERE name like '%$search%'");
        $student->execute();
        $result = $student->fetchAll();
        // echo "<pre>";
        // print_r($result);
        // echo "<pre>";
        echo "<table border='1'>";
        foreach ($result as $result) {
            echo 
            "<tr> 
                <td>" . $result['name'] . "</td> 
                <td>" . $result['course'] . "</td> 
                <td>" . $result['batch'] . "</td> 
                <td>" . $result['city'] . "</td> 
                <td>" . $result['year'] . "</td> 
            </tr>";
        }
    echo "</table>";
    }
?>