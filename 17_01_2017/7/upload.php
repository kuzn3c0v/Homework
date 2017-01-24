<?php

require_once ('addNewUrl.php');
$uploaddir = 'uploads/';
if ((!empty($_FILES['userFile'])) && ($_FILES['userFile']['type'] == 'text/plain')) {
    if (move_uploaded_file($_FILES['userFile']['tmp_name'], $uploaddir . $_FILES['userFile']['name'])) {
        addNewUrl($uploaddir . $_FILES['userFile']['name']); //Запускаем функцию записи в базу данных
    } else {
        echo "<div id='alerts' class=\"alert alert-warning\"><strong>Ошибка!</strong> Файл не загрузился.</div>";
    }
}
?>