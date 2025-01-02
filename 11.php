<?php
function divisibleByFive($number) {
    if ($number % 5 == 0) {
        return true;
    } else {
        return false;
    }
}
echo 'The number 200 is divisible by 5? ';
if(divisibleByFive(200) == '1') {
    echo "true";
} else {
    echo "false";
}