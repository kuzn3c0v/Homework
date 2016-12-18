<?php

$i = 555;
$w = 0;
if (is_numeric($i)) {
    do {
        $w = $w + ($i % 10);
        $i = $i / 10;
    } while ($i > 1);
    echo $w;
}
else {
    echo "Ошибка. Введите цифры";
}