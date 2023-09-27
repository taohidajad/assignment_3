<?php

// Create an array called $numbers containing the numbers 1 to 10
$numbers = range(1, 10);

// Use array_filter to remove even numbers
$filteredNumbers = array_filter($numbers, function($number) {
    return $number % 2 != 0;
});

print_r($filteredNumbers);

?>
