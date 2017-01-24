<?php
require_once ('dir.php');
require_once ('makeString.php');


if (!empty($_POST['directory'])) {           //Если пользователь отправил данные
    //Запускаем функцию прочтения выбранной пользователем папки и заполняем массив
    $dir[$_POST['directory']] = folders($_POST['directory']);
    output($dir, '.');  //Запускаем функцию вывода на экран
}

function output($arrayIn, $pathIn){  //Функция вывода на экран, первый параметр массив с содержимым папки
                                     //второй путь к объекту
    echo "<ul>";
    foreach ($arrayIn as $key => $value){
        if (is_array($value)){ //Если массив (папка)
            echo makeString($key);   //Выводим на экран название папки
            //Запускаем рекурсию для прочтения содержимого, вторым параметром отправляем путь к папке
            output($value, $pathIn . DIRECTORY_SEPARATOR . $key);
        }
        else{         //если файлы
            echo makeString($value, $pathIn);
        }
    }
    echo "</ul>";
}
?>