<?php

$path = ".";                   //Путь папки

$allObjects = folders($path);
output($allObjects);

function folders($dirIn)          //Функция вывода содержимого папки
{
    $result = [];                 //Массив для записи результата
    $handle = opendir($dirIn);    //Дескриптор каталога

    while(false !== ($objectName = readdir($handle))) { //Если чтение каталога удаётся, присваимаем название объекта перменной
        if($objectName == '.' or $objectName == '..'){  //Игнорируем виртуальные директории
            continue;
        }
        if(!is_dir($dirIn . DIRECTORY_SEPARATOR . $objectName)){//Если это не папка
            $result[] = $objectName;                        //записываем в массив результата
        }
        if(is_dir($dirIn . DIRECTORY_SEPARATOR . $objectName)){ //Если это папка, вызываем рекурсивно эту же функцию
            //и записываем результат в массив результата
            $result[$objectName] = folders($dirIn . DIRECTORY_SEPARATOR . $objectName);
        }
    }

    return $result;
}

function output($arrayIn){ //Функция вывода на экран
    echo "<ul>";
    foreach ($arrayIn as $key => $value){
        if (is_array($value)){
            echo "<li><img src=\"./firstFolder/pictures/folder.jpg\" width='15' /> {$key}</li>";
            output($value);
        }
        else{
            echo "<li>{$value}</li>";
        }
    }
    echo "</ul>";
}

