<?php
if (isset($_POST['submit'])) {
    $array = explode(",", $_POST['arr']);
} else {
    $array = array(10, 20, 30, 40, 50);
}

foreach ($array as $value) {
    echo trim($value) . "\n";
}
?>
