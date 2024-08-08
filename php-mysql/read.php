<?php
    include ("./config.php");
    $getStudents = $connection->prepare("SELECT * FROM students");
    $getStudents->execute();
    $students = $getStudents->fetchAll();
    // echo "<pre>";
    // print_r($students);
    // echo "<pre>";

    echo "<table border='1'>";
        foreach ($students as $student) {
            echo 
            "<tr> 
                <td>" . $student['name'] . "</td> 
                <td>" . $student['course'] . "</td> 
                <td>" . $student['batch'] . "</td> 
                <td>" . $student['city'] . "</td> 
                <td>" . $student['year'] . "</td> 
            </tr>";
            // echo "<br>";
        }
    echo "</table>";
?>