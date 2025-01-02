<?php
// Function to calculate the area of a circle
function calculateCircleArea($radius) {
    if ($radius < 0) {
        return "Radius cannot be negative.";
    }
    $area = pi() * pow($radius, 2);
    return $area;
}

// Input: Radius of the circle
$radius = 5; // You can change this value to test with different radii

// Calculate the area
$area = calculateCircleArea($radius);

// Display the result
echo "The area of a circle with radius $radius is: " . number_format($area, 2) . " square units.";
?>