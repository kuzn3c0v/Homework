<?php

$age = 'test';
if((is_numeric($age)) && ($age >= 0) && ($age < 123)) {
    if (($age >= 18) && ($age <= 59)) {
        echo "Вам еще работать и работать<br>";
    } elseif ($age > 59) {
        echo "Вам пора на пенсию<br>";
    } elseif (($age >= 0) && ($age <= 17)) {
        echo "Вам еще рано работать<br>";
    }
}
else{
    echo "Неизвестный возраст<br>";
}