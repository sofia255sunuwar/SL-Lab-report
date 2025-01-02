<?php
function carsNeeded($people) {
    // Each car can hold 5 people (4 passengers + 1 driver)
    return ceil($people / 5);
}

// Example usage
echo "Cars needed for 23 people: " . carsNeeded(23) . "<br>";
echo "Cars needed for 45 people: " . carsNeeded(45) . "<br>";
echo "Cars needed for 0 people: " . carsNeeded(0) . "<br>";
?>