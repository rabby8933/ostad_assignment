<?php

// Task 4: Multidimensional Array

$studentGrades = [
    ['Math' => 70, 'English' => 80, 'Science' => 78],
    ['Math' => 80, 'English' => 88, 'Science' => 90],
    ['Math' => 60, 'English' => 60, 'Science' => 80]
];

function calculateavgGrade($gradesArray)
{
    $avgGrades = [];

    foreach ($gradesArray as $studentGrades) {
        $total = array_sum($studentGrades);
        $count = count($studentGrades);
        $average = $total / $count;

        if ($average >= 80) {
            $avgGrade = 'A+';
        } elseif ($average >= 70) {
            $avgGrade = 'A';
        } elseif ($average >= 60) {
            $avgGrade = 'A-';
        }

        $avgGrades[] = $avgGrade;
    }

    return $avgGrades;
}

$studentavgGrades = calculateavgGrade($studentGrades);

foreach ($studentavgGrades as $index => $avgGrade) {
    echo $avgGrade . "\n";
}

