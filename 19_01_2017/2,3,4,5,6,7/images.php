<?php

session_start();

if (empty($_SESSION['username'])){//Если пользователь не авторизирован
    header('Location: index.php');
}

require_once('applications/config.php');

$page = basename($_SERVER['PHP_SELF']);
//Записываем текущий адрес и время для записи истории посещений
$history [] = $_SERVER['PHP_SELF'];
$history [] = date("Y-m-d H:i:s");
$_SESSION['history'][] = $history;

require_once ($config['temp'] . 'header.php');

require_once ($config['temp'] . 'uploadForm.php');//Форма загрузки файла

require_once ($config['app'] . 'upload.php');   //Обработка загруженного файла

require_once ($config['app'] . 'pictureView.php');//Вывод содержимого папки, с загруженными картинками

require_once ($config['temp'] . 'footer.php');

