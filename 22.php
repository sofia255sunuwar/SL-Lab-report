<?php
function addFirstThreeChars($string) {
    // Check if the string length is less than 3
    $prefix = strlen($string) < 3 ? $string : substr($string, 0, 3);
    // Return the string with the prefix added at both the front and the back
    return $prefix . $string . $prefix;
}

// Example usage
echo addFirstThreeChars("Python") . "<br>"; // Output: PytPythonPyt
echo addFirstThreeChars("JS") . "<br>";     // Output: JSJSJS
echo addFirstThreeChars("Code") . "<br>";   // Output: CodCodeCod
?>