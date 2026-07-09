<?php
echo "Using for loop:\n";
for ($i = 5; $i <= 10; $i++) {
    echo $i . "\n";
}

echo "Using foreach loop:\n";
$numbers = range(5, 10);
foreach ($numbers as $num) {
    echo $num . "\n";
}
?>
