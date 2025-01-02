<?php
function findLargest($a, $b, $c) {
    // Compare the three numbers and return the largest
    if ($a >= $b && $a >= $c) {
        return $a;
    } elseif ($b >= $a && $b >= $c) {
        return $b;
    } else {
        return $c;
    }
}

// Example usage
echo "Largest number among 10, 20, 30: " . findLargest(10, 20, 30) . "<br>"; // Output: 30
echo "Largest number among 5, 10, 5: " . findLargest(5, 10, 5) . "<br>"; // Output: 10
echo "Largest number among -1, -2, -3: " . findLargest(-1, -2, -3) . "<br>"; // Output: -1
?>