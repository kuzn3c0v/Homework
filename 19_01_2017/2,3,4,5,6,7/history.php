<?php

session_start();

if (empty($_SESSION['username'])){//Если пользователь не авторизирован
    header('Location: index.php');
}

if (!empty($_POST)){     //Если пользователь нажал кнопку "очистить историю"
    if (isset($_POST['clear'])){
        unset($_SESSION['history']);
    }
    header('Location: history.php');
    die();
}

require_once('applications/config.php');

$page = basename($_SERVER['PHP_SELF']);
//Записываем текущий адрес и время для записи истории посещений
$history [] = $_SERVER['PHP_SELF'];
$history [] = date("Y-m-d H:i:s");
$_SESSION['history'][] = $history;

require_once ($config['temp'] . 'header.php');

require_once ('applications/echoHistory.php'); //Выводим на экран историю посещений

require_once ($config['temp'] . 'footer.php');

?>