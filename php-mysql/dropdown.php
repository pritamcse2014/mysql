<?php
    include ("./config.php");
    $getStudent = $connection->prepare("SELECT id, name FROM students");
    $getStudent->execute();
    $studentData = $getStudent->fetchAll();
    // echo "<pre>";
    // print_r($studentData);
    // echo "<pre>";
    echo "<select>";
    echo "<option>Select Name</option>";
    foreach ($studentData as $student) {
        echo "<option value=" .$student['id']. ">" .$student['name']. "</option>";
    }
    echo "</select>";
?>