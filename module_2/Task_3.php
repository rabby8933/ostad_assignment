<?php

$a = 0;
$b = 1;

for ($i = 0; $i < 10; $i++) {
    echo $a . ' ';

    $c = $a + $b;
    $a = $b;
    $b = $c;

    if ($a > 100) {
        break;
    }
}
