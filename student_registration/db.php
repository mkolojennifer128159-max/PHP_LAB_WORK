<?php

$conn = mysqli_connect("localhost", "root", "", "student_db", 3306);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>