<?php

function year ($a) {
    if ($a % 4) {
        return ("В {$a} году - 365 дней (невискосный год)");
    }
    else {
        return ("В {$a} году - 366 дней (вискосный год)");
    }
}

echo year(rand(1800, 2100));