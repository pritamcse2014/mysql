<?php
    include ("./config.php");
    // echo $_GET['id'];
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $getStudent = $connection->prepare("SELECT * FROM students WHERE id='$id'");
        $getStudent->execute();
        $student = $getStudent->fetchAll();
        // echo "<pre>";
        // print_r($student);
        // echo "<pre>";
        $name = $student[0]['name'];
        $course = $student[0]['course'];
        $batch = $student[0]['batch'];
        $city = $student[0]['city'];
        $year = $student[0]['year'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MYSQL</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" value="<?php echo $name ?>" id="name" placeholder="Enter Your Name">
        <br> <br>
        <input type="text" name="course" value="<?php echo $course ?>" id="course" placeholder="Enter Your Course">
        <br> <br>
        <input type="text" name="batch" value="<?php echo $batch ?>" id="batch" placeholder="Enter Your Batch">
        <br> <br>
        <input type="text" name="city" value="<?php echo $city ?>" id="city" placeholder="Enter Your City">
        <br> <br>
        <input type="text" name="year" value="<?php echo $year ?>" id="year" placeholder="Enter Your Year">
        <br> <br>
        <button type="submit" value="<?php echo $id ?>" name="update">Update Student</button>
    </form>
</body>
</html>

<?php
    if (isset($_POST['update'])) {
        $id = $_POST['update'];
        $name = $_POST['name'];
        $course = $_POST['course'];
        $batch = $_POST['batch'];
        $city = $_POST['city'];
        $year = $_POST['year'];
        $updateStudent = $connection->prepare("UPDATE students SET name='$name',course='$course',batch='$batch',`city`='$city',`year`='$year' WHERE id = '$id'");
        
        if ($updateStudent->execute()) {
            header('location:delete-edit.php');
        } else {
            echo "Student Update Failed.";
        }
    }
?>