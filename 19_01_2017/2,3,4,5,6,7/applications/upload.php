<?php

$uploaddir = 'uploads/';
if (!is_dir($uploaddir)){ //Если папки для сохраненных изображений нет
    mkdir($uploaddir);    //создадим
}

$max_image_size		= 3145728; //Максимальный размер файла
$valid_types = 'jpg';

if (!empty($_FILES)) {
    if (is_uploaded_file($_FILES['jpgPicture']['tmp_name'])) { //Проверка, отправлялся ли файл методом POST
        $filename = $_FILES['jpgPicture']['tmp_name'];//Имя файла во временной директории
        $ext = substr($_FILES['jpgPicture']['name'], 1 + strrpos($_FILES['jpgPicture']['name'], "."));//Узнаем расширение файла

        if (filesize($filename) > $max_image_size){//Если размер файла больше лимита
            echo "<div id='alert' class=\"alert alert-warning\"><strong>Ошибка!</strong> Превышен допустимый размер.</div>";
        }
        elseif ($ext != $valid_types){//Если неверный размер
            echo "<div id='alert' class=\"alert alert-warning\"><strong>Ошибка!</strong> Неверный формат.</div>";
        }
        elseif (move_uploaded_file($_FILES['jpgPicture']['tmp_name'], $uploaddir . $_FILES['jpgPicture']['name'])) {
        }
        else {//При любых других ошибках
            echo "<div id='alert' class=\"alert alert-warning\"><strong>Ошибка!</strong> Файл не загрузился.</div>";
        }
    }
    else {//Если отправка осуществлялась не методом POST
        echo "<div id='alert' class=\"alert alert-warning\"><strong>Ошибка!</strong> Неверный метод отправки.</div>";
    }
}
?>