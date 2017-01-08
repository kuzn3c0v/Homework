<?php

function year ($a) {
    if ($a % 4) {
        return ("{$a} - невискосный год");
    }
    else {
        return ("{$a} - вискосный год");
    }
}

echo year(rand(1800, 2100));