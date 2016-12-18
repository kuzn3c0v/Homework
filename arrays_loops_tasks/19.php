<?php
$day = date("N");
$day = (int)$day - 1;

$mass = ["Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"];
foreach ($mass as $key => $a){
    if ($key == $day){
        echo "<i>{$a}</i><br>";
    }
    else {
        echo "$a<br>";
    }
}