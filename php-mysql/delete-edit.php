<?php
    include ("./config.php");
    // $students = $connection->prepare("DELETE FROM students WHERE id = 11");
    // echo $students->execute();
    $students = $connection->prepare("SELECT * FROM students");
    $students->execute();
    $result = $students->fetchAll();
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
                <td><a href='update.php?id=".$result['id']."'>Edit</a></td>
                <td><form method='post'>
                    <button name='delete' value=".$result['id'].">Delete</button>
                </form></td>
            </tr>";
        }
    echo "</table>";
    if (isset($_POST['delete'])) {
        $id = $_POST['delete'];
        $students = $connection->prepare("DELETE FROM students WHERE id='$id'");
        if ($students->execute()) {
            echo "Student Deleted Successfully.";
        } else {
            echo "Student Delete Failed.";
        }
    }
?>