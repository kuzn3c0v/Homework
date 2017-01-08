<?php

function even ($a)
{
    if ($a % 2) {
        return ("нечётное");
    } else {
        return ("чётное");
    }
}
$ran = rand(0, 10);
echo "Число {$ran} - " . even($ran);