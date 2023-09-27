<?php

//ForLoop
function ForLoop($start, $end, $step)
{
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i;
        if ($i < $end) {
            echo ', ';
        }
    }
}

$start = 2;
$end = 20;
$step = 2;

ForLoop($start, $end, $step);


//WhileLoop
function WhileLoop($start, $end, $step)
{
    $i = $start;
    while ($i <= $end) {
        echo $i;
        if ($i < $end) {
            echo ', ';
        }
        $i += $step;
    }
}

$start = 2;
$end = 20;
$step = 2;

WhileLoop($start, $end, $step);



//DoWhileLoop
function DoWhileLoop($start, $end, $step)
{
    $i = $start;
    do {
        echo $i;
        if ($i < $end) {
            echo ', ';
        }
        $i += $step;
    } while ($i <= $end);
}

$start = 2;
$end = 20;
$step = 2;

DoWhileLoop($start, $end, $step);


