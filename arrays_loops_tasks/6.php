<?php

$arr = [
    'green' => 'зеленый',
    'red' => 'красный',
    'blue' => 'голубой',
];

$en = [];
$ru = [];
foreach ($arr as $a => $b){
    $en[] = $a;
    $ru[] = $b;
};
foreach ($en as $c){
    echo " {$c}<br>";
};
foreach ($ru as $d){
    echo " {$d}<br>";
};