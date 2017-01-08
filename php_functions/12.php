<?php

function word ($number, $wo1, $wo2, $wo3) {
    if ($number == 1) {
        return ("{$number} {$wo1}");
    }
    elseif (($number > 1) && ($number < 5)) {
        return ("{$number} {$wo2}");
    }
    else {
        return ("{$number} {$wo3}");
    }

}

echo word (5, "яблоко", "яблока", "яблок");