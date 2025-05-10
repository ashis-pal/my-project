<?php
// Static input
$temperature = 100;
$unit = "C";

// Use "C" for Celsius and "F" for Fahrenheit

if ($unit == "C") {
    // Celsius to Fahrenheit
    
    $converted = ($temperature * 9/5) + 32;
    echo "$temperature °C = $converted °F";
} elseif ($unit == "F") {
    // Fahrenheit to Celsius
    $converted = ($temperature - 32) * 5/9;
    echo "$temperature °F = $converted °C";
} else {
    echo "Invalid temperature unit!";
}
?>