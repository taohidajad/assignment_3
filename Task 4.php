<?php

function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;
        
        echo "Student $student Average Grade: $average\n";
    }
}

// Create a multidimensional array $studentGrades with student names as keys and grades as values
$studentGrades = array(
    'John' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Alice' => array('Math' => 90, 'English' => 88, 'Science' => 95),
    'Bob' => array('Math' => 75, 'English' => 80, 'Science' => 85),
);

// Call the function to calculate and print average grades
calculateAverageGrades($studentGrades);

?>
