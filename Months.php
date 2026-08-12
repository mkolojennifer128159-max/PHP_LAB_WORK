<?php

// Numeric Array
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

echo "<h2>Numeric Array - Days</h2>";

foreach ($days as $day) {
    echo $day . "<br>";
}


// Associative Array
$months = array(
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

echo "<h2>Associative Array - Months</h2>";

foreach ($months as $month => $daysInMonth) {
    echo $month . " => " . $daysInMonth . " days<br>";
}


// Multidimensional Array
$laptops = array(
    "Dell" => array(
        "Model" => "Inspiron 15",
        "Price" => 55000
    ),
    "HP" => array(
        "Model" => "Pavilion 15",
        "Price" => 60000
    )
);

echo "<h2>Multidimensional Array - Laptops</h2>";

foreach ($laptops as $company => $details) {
    echo "Company: " . $company . "<br>";
    echo "Model: " . $details["Model"] . "<br>";
    echo "Price: ₹" . $details["Price"] . "<br><br>";
}

?>