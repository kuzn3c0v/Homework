<?php

function trans ($txt, $opt) {
    $b = ["Б" => "B", "б" => "b", "В" => "V", "в" => "v", "Г" => "G", "г" => "g", "Д" => "D", "д" => "d",
        "Ё" => "Yo", "ё" => "yo", "Ж" => "Zh", "ж" => "zh", "З" => "Z", "з" => "z", "И" => "I", "и" => "i",
        "Й" => "Iy", "й" => "iy", "к" => "k", "Л" => "L", "л" => "l", "Н" => "N", "н" => "n", "П" => "P", "п" => "p",
        "Р" => "R", "р" => "r", "С" => "S", "с" => "s", "т" => "t", "У" => "U", "у" => "u", "Ф" => "F", "ф" => "f",
        "Х" => "H", "х" => "h", "Ц" => "C", "ц" => "c", "Ч" => "Ch", "ч" => "ch", "Ш" => "Sh", "ш" => "sh",
        "Щ" => "Shc", "щ" => "shc", "Ь" => "'", "ь" => "'", "Ъ" => "'", "ъ" => "'", "Ы" => "Y", "ы" => "y",
        "Э" => "E", "э" => "e", "Ю" => "Yu", "ю" => "yu", "Я" => "Ya", "я" => "ya"];
    if ($opt == 0) {
        return (strtr($txt, $b));
    }
    elseif ($opt == 1) {
        return (strtr($txt, array_flip($b)));
    }
    else {
        return ("Неверная опция");
    }
}

$text = "Этот текст переведется на транслит.";
$text2 = "A etot obratno na kirillicu.";

echo trans($text, 0) . "<br>";         //Второй передаваемый параметр: 0 - с кириллицы на транслит
echo trans($text2, 1) . "<br>";        //                              1 - с транслита на кириллицу

// Возможны трудности перевода)) С транслита буква "Е" может означать как "Е" и "Э".
