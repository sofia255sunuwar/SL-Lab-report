<?php
function stringLengthRecursive($string) {
    // Base case: if the string is empty, its length is 0
    if ($string === "") {
        return 0;
    }
    // Recursive case: return 1 (for the first character) + the length of the rest of the string
    return 1 + stringLengthRecursive(substr($string, 1));
}

// Example usage
$string = "hi";
echo "The length of the string is: " . stringLengthRecursive($string);
?>