<?php
$a = 20;
$b = 6;

echo "a + b = " . ($a + $b) . "\n";
echo "a - b = " . ($a - $b) . "\n";
echo "a * b = " . ($a * $b) . "\n";
echo "a / b = " . ($a / $b) . "\n";
echo "a % b = " . ($a % $b) . "\n";

var_dump($a == $b);
var_dump($a > $b);
var_dump($a < $b);

$x = true;
$y = false;
var_dump($x && $y);
var_dump($x || $y);
var_dump(!$x);

$i = 10;
echo "i++ = " . $i++ . "\n";
echo "++i = " . ++$i . "\n";
?>
