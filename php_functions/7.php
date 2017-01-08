<?php

function data ($d, $m, $w) {
    return "{$d} " . month($m) . ", " . weekday($w) . ".<br>";
}

function month ($mo) {
    $mass = ['Января', 'Февраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа', 'Сентября', 'Октября',
        'Ноября', 'Декабря'];
    return ($mass [$mo - 1]);
}

function weekday ($wee) {
    $mass2 = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
    return ($mass2 [$wee]);
}

echo data(date("j"), date("n"), date("w"));