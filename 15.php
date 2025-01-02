<?php
function getValueAtIndex($array, $index) {
    // Check if the index is valid
    if (isset($array[$index])) {
        return $array[$index];
    } else {
        return "Invalid index.";
    }
}

// Example usage
$array = ["apple", "banana", "cherry", "date"];
$index = 2;

echo "Value at index $index: " . getValueAtIndex($array, $index) . "<br>";

$index = 5;
echo "Value at index $index: " . getValueAtIndex($array, $index) . "<br>";
?>