<?php

$a = 8000;
$b = 500;
if ($a >= $b){
    echo "{$a}<br>";
}
else{
    echo "{$b}<br>";
}


$a = '78';
$b = 78;
if($a == $b){
    echo "Равны<br>";
}
else{
    echo "Не равны<br>";
}


if($a === $b){
    echo "Эквивалентны<br>";
}
else{
    echo "Не эквивалентны<br>";
}

var_dump($a == $b);
var_dump($a != $b);

