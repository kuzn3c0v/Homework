<?php

$number = 20;
echo properties($number);

//-------------------------------------------------------

function properties ($in){
    if ($in == 0){
        return ("нулевое число");
    }
    elseif ($in > 0){
        $positive = "положительное";
    }
    elseif ($in < 0){
        $positive = "отрицательное";
    }
    else{
        return (null);
    }

    if ($in % 2) {
        $even = "нечетное";
    }
    else{
        $even = "четное";
    }
    return ("{$in} - {$positive} {$even} число");
}
