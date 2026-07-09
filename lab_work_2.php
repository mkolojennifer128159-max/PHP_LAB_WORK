<?php
function collegeInfo() {
    echo "College Name: Marwadi University\n";
    echo "Course Name: BCA\n";
    echo "Academic Year: 2026\n";
}

function studentDetails($studentName, $enrollmentNumber, $semester) {
    echo "Student Name: " . $studentName . "\n";
    echo "Enrollment Number: " . $enrollmentNumber . "\n";
    echo "Semester: " . $semester . "\n";
}

function calculatePercentage($m1, $m2, $m3, $m4, $m5) {
    $total = $m1 + $m2 + $m3 + $m4 + $m5;
    return ($total / 500) * 100;
}

function welcomeStudent() {
    echo "Welcome to the College Portal!\n";
}

collegeInfo();
studentDetails("Jennifer M", "123456789", 5);

$percentage = calculatePercentage(85, 78, 90, 72, 88);
echo "Percentage: " . $percentage . "%\n";

if (function_exists("welcomeStudent")) {
    welcomeStudent();
} else {
    echo "Error: welcomeStudent() function does not exist.\n";
}
?>
