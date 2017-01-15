<?php

$number = 100;
echo properties($number);

//-------------------------------------------------------

function properties ($in){
    if ($in % 2) {
        $even = "нечетное";
    }
    else{
        $even = "четное";
    }

    if (($in >= 0) && ($in < 10)){
        $digit = "однозначное";
    }
    elseif (($in >= 10) && ($in < 100)){
        $digit = "двузначное";
    }
    elseif (($in >= 100) && ($in <= 999)){
        $digit = "трехзначное";
    }
    else{
        return(null);
    }

    return ("{$in} - {$even} {$digit} число");
}
