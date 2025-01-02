<?php
// 1. Working with variables and data types
// a. Create variables with different data types
$integerVar = 10;
$floatVar = 20.5;
$stringVar = "Hello, PHP!";
$booleanVar = true;
$arrayVar = ["apple", "banana", "cherry"];
echo '<pre>';

// Print using echo and print
echo "Integer: $integerVar\n";
print "Float: $floatVar\n";
echo "String: $stringVar\n";
echo "Boolean: " . ($booleanVar ? "true" : "false") . "\n";

// b. Display content of array using print_r and var_dump
print_r($arrayVar);
echo "\n";
var_dump($arrayVar);

// c. Display result of checking data types
echo "\nData type checks:\n";
echo "$integerVar is integer: " . (is_int($integerVar) ? "true" : "false") . "\n";
echo "$floatVar is float: " . (is_float($floatVar) ? "true" : "false") . "\n";
echo "$stringVar is string: " . (is_string($stringVar) ? "true" : "false") . "\n";
echo "$booleanVar is boolean: " . (is_bool($booleanVar) ? "true" : "false") . "\n";
echo "arrayVar is array: " . (is_array($arrayVar) ? "true" : "false") . "\n";
echo '</pre>';
