<?php
function absoluteDifferenceOrTriple($n) {
    $difference = abs($n - 51);
    return ($n > 51) ? $difference * 3 : $difference;
}

// Example usage
echo "Difference or Triple (60): " . absoluteDifferenceOrTriple(60) . "\n";
echo "Difference or Triple (45): " . absoluteDifferenceOrTriple(45) . "\n";
?>