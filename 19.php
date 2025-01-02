<?php
function addIfToFront($string) {
    // Check if the string already starts with 'if'
    if (substr($string, 0, 2) === "if") {
        return $string;
    }
    // Add 'if' to the front of the string
    return "if " . $string;
}

// Example usage
echo addIfToFront("if else") . "<br>"; // Output: if else
echo addIfToFront("else") . "<br>";    // Output: if else
echo addIfToFront("if") . "<br>";      // Output: if
?>