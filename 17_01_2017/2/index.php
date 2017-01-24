<?php

$firstFile = explode(". ", file_get_contents('firstFile.txt'));
$secondFile = explode(". ", file_get_contents('secondFile.txt'));

$result = $firstFile;
foreach ($secondFile as $value){
            $result [] = $value;
}
$result = array_diff($result, array(''));   //Очищаем массив от пустых элементов;
$result = array_flip(array_flip($result));  //или так $result = array_unique($result);

touch('result.txt');
file_put_contents('result.txt', implode(". " . PHP_EOL, $result));

//--------------------Вывод на экран-----------------//

echo "<strong>Текст из первого файла:</strong><br>";
foreach ($firstFile as $value){
    echo "<i>{$value}</i><br>";
}
echo "<strong>Текст из второго файла:</strong><br>";
foreach ($secondFile as $value){
    echo "<i>{$value}</i><br>";
}
echo "<strong>Все предложения из двух файлов:</strong><br>";
foreach (file('result.txt') as $value){
    echo "<i>{$value}</i><br>";
}