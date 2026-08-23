<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

<h2>Student Registration Form</h2>

<form method="POST">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Email:
    <input type="email" name="email" required>
    <br><br>

    Course:
    <input type="text" name="course" required>
    <br><br>

    <input type="submit" name="submit" value="Register">

</form>

<?php

include "db.php";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (name, email, course)
            VALUES ('$name', '$email', '$course')";

    if (mysqli_query($conn, $sql)) {
        echo "<p>Student registered successfully!</p>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>

</body>
</html>