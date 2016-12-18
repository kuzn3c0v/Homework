<?php

$month = date("n");         //Текущий месяц
$month = (int)$month - 1;

$mass = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август",
    "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
foreach ($mass as $key => $val){
    if ($key == $month){
        echo "<strong>{$val}</strong><br>";
    }
    else {
        echo "{$val}<br>";
    }
}