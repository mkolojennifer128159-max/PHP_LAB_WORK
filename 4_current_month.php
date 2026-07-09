<?php
$monthNumber = date("n");
$months = array(1=>"January","February","March","April","May","June","July","August","September","October","November","December");

if ($monthNumber == 1) {
    echo "Current Month: January\n";
} elseif ($monthNumber == 2) {
    echo "Current Month: February\n";
} else {
    echo "Current Month: " . $months[$monthNumber] . "\n";
}

switch ($monthNumber) {
    case 1:
        echo "Current Month: January\n";
        break;
    case 2:
        echo "Current Month: February\n";
        break;
    default:
        echo "Current Month: " . $months[$monthNumber] . "\n";
}
?>
