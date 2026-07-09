<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];

    echo "Name: " . $name . "\n";
    echo "Age: " . $age . "\n";
} else {
    echo "No data submitted.\n";
}
?>
