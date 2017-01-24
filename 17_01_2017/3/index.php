<?php

$words = explode(" ", file_get_contents('words.txt'));

echo "<strong>До сортировки:</strong>";
foreach ($words as $value){
    echo "{$value}<br>";
}

sort($words);

touch('alphabet.txt');
file_put_contents('alphabet.txt', implode(PHP_EOL, $words));

echo "<br><strong>После сортировки:</strong><br>";
foreach (file('alphabet.txt') as $value){
    echo "{$value}<br>";
}