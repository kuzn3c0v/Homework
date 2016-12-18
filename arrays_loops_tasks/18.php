<?php

$mass = ["Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"];
foreach ($mass as $key => $day){
    if ($key > 4){
        echo "<strong>{$day}</strong><br>";
    }
    else {
        echo "{$day}<br>";
    }
}