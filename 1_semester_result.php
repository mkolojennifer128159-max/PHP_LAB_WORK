<?php
define("STUDENT_NAME", "Jennifer M");
define("ENROLLMENT_NO", "210123456789");
define("SEMESTER", 5);

$marks1 = 85;
$marks2 = 78;
$marks3 = 90;
$marks4 = 72;
$marks5 = 88;

$totalMarks = $marks1 + $marks2 + $marks3 + $marks4 + $marks5;
$percentage = ($totalMarks / 500) * 100;

echo "Name: " . STUDENT_NAME . "\n";
echo "Enrollment No: " . ENROLLMENT_NO . "\n";
echo "Semester: " . SEMESTER . "\n";
echo "Total Marks: " . $totalMarks . "\n";
echo "Percentage: " . $percentage . "%\n";
?>
