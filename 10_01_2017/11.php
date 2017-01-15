<?php

$number1 = 30;
$number2 = -2;

echo closeToTen($number1, $number2);


function closeToTen ($one, $two){
    $num1 = $one;
    $num2 = $two;

    $one -= 10;
    $two -= 10;

    if ($one < 0){
        $one *= - 1;
    }

    if ($two < 0){
        $two *= - 1;
    }

    if ($one < $two){
        return ("Число {$num1} ближайшее  к 10");
    }
    else {
        return ("Число {$num2} ближайшее  к 10");
    }
}

