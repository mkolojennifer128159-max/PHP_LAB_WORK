<?php
$array1 = array(1, 2, 3, 4, 5);
$array2 = array(6, 7, 8, 9, 10);

$mergedArray = array_merge($array1, $array2);

echo "Array 1: " . implode(", ", $array1) . "\n";
echo "Array 2: " . implode(", ", $array2) . "\n";
echo "Merged: " . implode(", ", $mergedArray) . "\n";
?>
