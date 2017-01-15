<?php

function light ($in) {
    $in = fmod($in, 5);
    if ($in > 0 && $in <=3) {
        return ("Зеленый");
    }
    elseif ($in > 3 && $in <= 4) {
        return ("Желтый");
    }
    elseif (($in > 4 && $in <= 5) || ($in == 0) ) {
        return ("Красный");
    }
    else {
        return ("error");
    }
}

$t = 32.5;
echo light($t);