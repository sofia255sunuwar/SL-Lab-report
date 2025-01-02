<?php
function convertLastThreeToUpper($string) {
    // Check if the string length is less than 3
    if (strlen($string) < 3) {
        return strtoupper($string);
    }
    // Get the last 3 characters in uppercase and the rest of the string as is
    $lastThree = strtoupper(substr($string, -3));
    $remainingString = substr($string, 0, strlen($string) - 3);

    return $remainingString . $lastThree;
}

// Example usage
echo convertLastThreeToUpper("Nepal") . "<br>";      // Output: NePAL
echo convertLastThreeToUpper("Npl") . "<br>";        // Output: NPL
echo convertLastThreeToUpper("Bca") . "<br>";        // Output: BCA
echo convertLastThreeToUpper("Bachelor") . "<br>";   // Output: BacheLOR
?>