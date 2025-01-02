<?php
function calculatePower($voltage, $current) {
    return $voltage * $current;
}
echo "\nPower for 330V and 8A: " . calculatePower(330, 8) . "W\n";
