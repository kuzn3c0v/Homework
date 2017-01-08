<?php

function count1 ($a) {
    $c = 0;
    foreach ($a as $b) {
        $c++;
    }
    return ($c);
}

$mass = [1, 2, 3, 4, 5];
echo count1($mass);
