<?php
function createFourCopies($string) {
    // Check if the string length is less than 2
    if (strlen($string) < 2) {
        return $string;
    }
    // Get the first 2 characters of the string
    $frontTwo = substr($string, 0, 2);
    // Return 4 copies of the front 2 characters
    return str_repeat($frontTwo, 4);
}

// Example usage
echo createFourCopies("C Sharp") . "<br>"; // Output: C C C C
echo createFourCopies("JS") . "<br>";      // Output: JSJSJSJS
echo createFourCopies("a") . "<br>";       // Output: a
?>
