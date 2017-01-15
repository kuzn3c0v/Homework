<?php

$a = 5;
$b = 1;
$c = 5;

echo compare($a, $b, $c);

function compare ($num1, $num2, $num3){
    if (($num1 != $num2) && ($num2 == $num3)){
        return (1);
    }
    elseif (($num1 != $num2) && ($num1 == $num3)){
        return (2);
    }
    elseif (($num3 != $num2) && ($num1 == $num2)){
        return (3);
    }
    else{
        return (null);
    }
}