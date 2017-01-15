<?php

$text_one = "А роза упала на лапу Азора ";
$text_two = "Аргентина манит негра";
$text_three = "Аргентина манит Азора";

echo palindrome($text_one);
echo palindrome($text_two);
echo palindrome($text_three);

function palindrome ($in){
    $text = $in;                               //Для удобного вывода на экран неформатированного текста

    $in = (str_replace(" ", "", $in));         //Убераем все пробелы
    $in = (mb_strtolower($in));                //Переводим в нижний регистр

    $in_backwards = "";                        //Переменная для записи предложения наоборот
    for ($x = mb_strlen($in); $x >= 0; $x--){     //сама запись
        $in_backwards .= mb_substr($in, $x, 1, 'UTF-8');
    }

    if (strnatcmp($in, $in_backwards)){    //Если два предложения не равны
        return ("\"{$text}\" - не палиндром<br>");
    }
    else{
        return ("\"{$text}\" - палиндром<br>");
    }
}

