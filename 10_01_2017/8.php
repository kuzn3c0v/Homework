<?php

//длина катетов
$a = 3;
$b = 4;

echo pythagoras($a, $b);

function pythagoras ($a1, $b1){
    return (sqrt($a1 ** 2 + $b1 ** 2));
}