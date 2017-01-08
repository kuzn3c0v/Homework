<?php

function cube ($a) {
    return ($a ** 3);
}
$b = rand(1, 10);
echo "Куб числа {$b} = " . cube($b);