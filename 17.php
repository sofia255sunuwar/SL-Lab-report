<?php
function computeSumOrTriple($a, $b) {
    $sum = $a + $b;
    return ($a === $b) ? $sum * 3 : $sum;
}

// Example usage
echo "Sum or Triple (3, 3): " . computeSumOrTriple(3, 3) . "\n";
echo "Sum or Triple (3, 5): " . computeSumOrTriple(3, 5) . "\n";
?>
