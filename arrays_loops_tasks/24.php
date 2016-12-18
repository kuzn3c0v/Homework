<?php

$i = 355190525;
$i2 = $i;
$q = 5;
$count = 0;
do {
    $a = $i % 10;
    $i = $i / 10;
    if ($a == $q){
        $count++;
    }

} while ($i > 1);
echo "$count раз(-а) встречается число $q в числе $i2";