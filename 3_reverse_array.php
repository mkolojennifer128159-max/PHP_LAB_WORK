<?php
if (isset($_POST['submit'])) {
    $array = explode(",", $_POST['arr']);
} else {
    $array = array(10, 20, 30, 40, 50);
}

$array = array_map('trim', $array);

echo "Original: " . implode(", ", $array) . "\n";
echo "Reversed: " . implode(", ", array_reverse($array)) . "\n";
?>
