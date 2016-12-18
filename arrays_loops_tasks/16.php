<?php

$mass = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$count = 0;
foreach ($mass as $a){
    if ($count == 3){
        $count = 0;
        echo "<br>";
    }
    echo "$a ";
    $count++;
}
