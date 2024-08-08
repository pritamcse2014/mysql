<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MYSQL</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" id="name" placeholder="Enter Your Name">
        <br> <br>
        <input type="text" name="course" id="course" placeholder="Enter Your Course">
        <br> <br>
        <input type="text" name="batch" id="batch" placeholder="Enter Your Batch">
        <br> <br>
        <input type="text" name="city" id="city" placeholder="Enter Your City">
        <br> <br>
        <input type="text" name="year" id="year" placeholder="Enter Your Year">
        <br> <br>
        <button type="submit">Add New Student</button>
    </form>
</body>
</html>

<?php
    // include ("./config.php");
    // $student = $connection->prepare("
    //     INSERT INTO `students` (`id`, `name`, `course`, `batch`, `city`, `year`) VALUES ('NULL','Pritam Kumar Kundu','CSE','evening','Dhaka','2019');
    // ");
    // $result = $student->execute();
    // if ($result) {
    //     echo "Data Inserted Successfully.";
    // } else {
    //     echo "Data Inserted Failed.";
    // }

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $course = $_POST['course'];
        $batch = $_POST['batch'];
        $city = $_POST['city'];
        $year = $_POST['year'];
        include ("./config.php");
        $student = $connection->prepare("
            INSERT INTO `students` (`id`, `name`, `course`, `batch`, `city`, `year`) VALUES ('NULL','$name','$course','$batch','$city','$year');
        ");
        $result = $student->execute();
        if ($result) {
            echo "Data Inserted Successfully.";
        } else {
            echo "Data Inserted Failed.";
        }
    }
?>