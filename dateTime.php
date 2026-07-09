<?php

date_default_timezone_set("Asia/Kolkata");
$date1 = date('d-M-y : h-i-s');
//the date function is always a string
echo $date1;

$date_1 = new DateTime('2026-7-7');
$date_2 = new DateTime('2021-7-7');

$finalDate = date_diff($date_1, $date_2);
echo "<br>";
echo $finalDate->format('%y years %m moths %d days');

?>