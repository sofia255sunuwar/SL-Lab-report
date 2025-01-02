<?php
function calculateArea($base, $height, $shape) {
    // Ensure base and height are positive decimals
    if ($base <= 0 || $height <= 0) {
        return "Base and height must be positive numbers.";
    }

    // Calculate area based on shape
    switch (strtolower($shape)) {
        case "triangle":
            return 0.5 * $base * $height;
        case "parallelogram":
            return $base * $height;
        default:
            return "Invalid shape. Please choose 'triangle' or 'parallelogram'.";
    }
}

// Example usage
echo "Triangle Area: " . calculateArea(5, 10, "triangle") . "<br>";
echo "Parallelogram Area: " . calculateArea(5, 10, "parallelogram") . "<br>";
echo "Invalid Shape: " . calculateArea(5, 10, "circle") . "<br>";
?>