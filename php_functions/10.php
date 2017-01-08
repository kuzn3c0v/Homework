<?php

function str1 ($c, $d) {
    if ((iconv_strlen($c) > $d) && ($d >= 1)){
        return (mb_substr($c, 0, (iconv_strlen($c) - $d) * -1, "utf-8"));
    }
    else {
        return ($c);
    }
}
$a = 'абвгдеёжз';     //Строка
$b = 7;               //Первые N символов

echo str1($a, $b) . "<br>";
