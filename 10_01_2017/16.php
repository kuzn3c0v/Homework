<?php

$a = 5;
$b = 4;
$c = 5;

echo compare($a, $b, $c);

function compare ($number1, $number2, $number3){
    if (($number1 == $number2) && ($number1 == $number3)){
        return ("{$number1} {$number2} {$number3}");
    }
    elseif ($number1 == $number2){
        return ("{$number1} {$number2}");
    }
    elseif ($number1 == $number3){
        return ("{$number1} {$number3}");
    }
    elseif ($number2 == $number3){
        return ("{$number2} {$number3}");
    }
    else{
        return (null);
    }
}