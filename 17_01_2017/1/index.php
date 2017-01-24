<?php

$firstFile = explode(" ", iconv("windows-1251", "utf-8",file_get_contents('firstFile.txt')));
$secondFile = explode(" ", iconv("windows-1251", "utf-8",file_get_contents('secondFile.txt')));

$wordOnlyFirstFile = ['Слова встречающиеся только в первом файле:'];
$wordInTwoFiles = ['Слова повторяющиеся в двух файлах: '];
$wordMoreThanTwo = ['Слова повторяющиеся в каждом файле более двух раз: '];

foreach ($firstFile as $wordFirst){
    if (!in_array($wordFirst, $secondFile)){            //если такого слова нет во втором файле
        if (!in_array($wordFirst, $wordOnlyFirstFile)) {//и оно еще не было записано в массив
            $wordOnlyFirstFile [] = $wordFirst;
            }
            else{

            }
    }
    else {
        if (!in_array($wordFirst, $wordInTwoFiles)){
            $wordInTwoFiles [] = $wordFirst;
        }
    }

}

$firstFile = array_count_values($firstFile); //Подсчитывваем сколько раз в массиве втречается один и тот же элемент
foreach ($firstFile as $key => $value){
    if ($value <= 2){                        //Если меньше двух раз - удаляем
        unset($firstFile[$key]);
    }
}

$secondFile = array_count_values($secondFile);// Тоже самое делаем с массивом слов из второго файла
foreach ($secondFile as $key => $value){
    if ($value <= 2){
        unset($secondFile[$key]);
    }
}



foreach ($secondFile as $key => $value){
    if (key_exists($key, $secondFile)) {  //Если слова, написанные два раза в каждом файле, совпадают
        $wordMoreThanTwo [] = $key;
    }
}

touch('result.txt');
file_put_contents('result.txt', implode(" " . PHP_EOL, $wordOnlyFirstFile) . PHP_EOL . PHP_EOL .
    implode(" " . PHP_EOL, $wordInTwoFiles) . PHP_EOL . PHP_EOL . implode(" " . PHP_EOL, $wordMoreThanTwo));


foreach (file('result.txt') as $value){
    echo "{$value}<br>";
}