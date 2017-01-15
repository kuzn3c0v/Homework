<?php

$a = 5;
$b = 3;
$c = 2;

echo triangle($a, $b, $c);

function triangle ($a1, $b1, $c1){
    if (($a1 + $b1 > $c1) && ($a1 < $b1 + $c1) && ($a1 + $c1 > $b1)){
        return ("Треугольник существует.");
    }
    else{
        return ("Треугольник не существует.");
    }
}