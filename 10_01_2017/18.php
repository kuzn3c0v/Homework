<?php

$x = 2;
$y = -5;

echo axes($x, $y);

function axes ($x1, $y1){
    if (($x1 > 0) && ($y1 > 0)){
        return ("Точка находится в I четверти");
    }
    elseif (($x1 < 0) && ($y1 > 0)){
        return ("Точка находится во II четверти");
    }
    elseif (($x1 < 0) && ($y1 < 0)){
        return ("Точка находится в III четверти");
    }
    elseif (($x1 > 0) && ($y1 < 0)){
        return ("Точка находится в IV четверти");
    }
    else{
        return (null);
    }
}