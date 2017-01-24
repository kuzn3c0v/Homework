<?php


if ((!empty($_FILES['userFile']))) {
    $uploaddir = 'myDir/';
    if (file_exists($uploaddir) == false) {
        mkdir($uploaddir);
    }

    if (move_uploaded_file($_FILES['userFile']['tmp_name'], $uploaddir . $_FILES['userFile']['name'])) {
        echo "<div id='alerts' class=\"alert alert-success\">Файл успешно сохранен.</div>";
    } else {
        echo "<div id='alerts' class=\"alert alert-warning\"><strong>Ошибка!</strong> Файл не загрузился.</div>";
    }
}
?>