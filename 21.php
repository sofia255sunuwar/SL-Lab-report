<?php
function addLastChar($string) {
    // Get the last character of the string
    $lastChar = substr($string, -1);
    // Return the string with the last character added at both the front and the back
    return $lastChar . $string . $lastChar;
}

// Example usage
echo addLastChar("Red") . "<br>";    // Output: dRedd
echo addLastChar("Green") . "<br>";  // Output: nGreenn
echo addLastChar("1") . "<br>";      // Output: 111
?>