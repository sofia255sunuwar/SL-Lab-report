<?php
function areStringsEqualLength($string1, $string2) {
    return strlen($string1) === strlen($string2);
}

// Example usage
echo $string1 = "hello";
echo '<br>';

echo $string2 = "world";
echo '<br>';

if (areStringsEqualLength($string1, $string2)) {
    echo "The strings have equal length.";
} else {
    echo "The strings do not have equal length.";
}
?>