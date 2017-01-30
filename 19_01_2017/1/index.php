<?php

$temp = "templates/";

session_start();

if ($_POST) {
    if (!empty($_POST['name'])) {
        $_SESSION['name'] = $_POST['name'];
    }
    else{
        $error = 1;                       //Если отправили пустую строку
    }
}

if (!empty($_SESSION)){
    header("Location:hello.php");
}

require_once ($temp . 'header.html');

require_once ($temp . 'form.html');

require_once ('error.php');

require_once ($temp . 'footer.html');