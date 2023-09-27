<?php

function printFibonacci($count)
{
    $a = 0;
    $b = 1;

    for ($i = 0; $i < $count; $i++) {
        echo $a . ', ';

        $c = $a + $b;
        $a = $b;
        $b = $c;
    }
}

$count = 15;
printFibonacci($count);
