<?php
// Function to convert minutes to seconds
function convertMinutesToSeconds($minutes) {
    if ($minutes < 0) {
        return "Minutes cannot be negative.";
    }
    $seconds = $minutes * 60;
    return $seconds;
}

// Input: Number of minutes
$minutes = 5; // You can change this value to test with different inputs

// Convert minutes to seconds
$seconds = convertMinutesToSeconds($minutes);

// Display the result
echo "$minutes minutes is equal to $seconds seconds.";
?>