<?php

function sortGradesDescending($grades) {
    // Sort the grades array in descending order
    rsort($grades);
    return $grades;
}

// Create an array called $grades with the given values
$grades = array(85, 92, 78, 88, 95);

// Call the function to sort grades in descending order
$sortedGrades = sortGradesDescending($grades);


print_r($sortedGrades);

?>
