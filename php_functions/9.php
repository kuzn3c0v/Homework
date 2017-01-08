<?php

function even ($m) {
    $array = [];

    foreach ($m as $a) {
        if ((($a % 2) == 0) && (is_numeric($a))) {
            $array [] = $a;
        }
    }

    return $array;
}

$mass = [0, 1, 2, "some text", 4, 5, 6, 7, 8, 9, 10];

print_r(even ($mass));