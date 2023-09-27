<?php

// Task 3: Array Sorting  

function sortGrades($grades)
{
    rsort($grades);
    return $grades;
}

$grades = [85, 92, 78, 88, 95];
$sortedGrades = sortGrades($grades);
print_r($sortedGrades);


