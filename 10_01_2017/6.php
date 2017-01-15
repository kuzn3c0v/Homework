<?php

$a = 1;
$b = -6;
$c = 9;

echo quadratic($a, $b, $c);

function quadratic ($a1, $b1, $c1){

    if ($a1 == 0){
        return ("error");
    }

    $d = ($b1 * $b1) - (4 *$a1 * $c1);

    if ($d > 0){
        $x1 = (- $b1 + sqrt($d)) / (2 * $a1);
        $x2 = (- $b1 - sqrt($d)) / (2 * $a1);
        return ("D > 0, x1 = {$x1}, х2 = {$x2}");
    }
    elseif ($d == 0){
        return  ("D = 0, x = " . (- $b1 / (2 * $a1)));
    }
    else{
        return  ("D < 0, решений нет");
    }
}