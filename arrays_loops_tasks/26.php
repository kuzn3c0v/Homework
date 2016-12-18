<?php

for ($i = 1; $i <= 7; $i++) {
    $mass [] = rand(1, 100);
}
$paired = 1;
$unpaired = 1;

foreach ($mass as $key => $val) {
    if (($key % 2) && ($key !==0)) {
        $unpaired *= $val;
    }
    elseif ($key !==0) {
        $paired *= $val;
    }
    echo "{$key} => {$val}<br>";
}

echo "Произведение чисел с четными индексами = $paired<br>";
echo "Произведение чисел с нечетными индексами = $unpaired<br>";