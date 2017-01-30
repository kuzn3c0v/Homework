<?php

session_start();

require_once('applications/config.php');

//--------------------------------------------------------
$page = basename($_SERVER['PHP_SELF']); //Название текущей страницы (нужна для выведения контента
//для определенной страницы (в файле contentReader.php))

//Записываем текущий адрес и время для записи истории посещений
$history [] = $_SERVER['PHP_SELF'];
$history [] = date("Y-m-d H:i:s");
$_SESSION['history'][] = $history;

//--------------------------------------------------------
//                           Авторизация
//--------------------------------------------------------
if ((empty($_POST)) && (empty($_COOKIE))){  //Если нет куки и пользователь еще не отправлял форму авторизации
    require_once ($config['temp'] . 'header.php');
    require_once ($config['temp'] . 'loginForm.php'); //выведем на экран форму авторизации
}
elseif ($_POST){   //Если пользователь отправил форму
    if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['mail'])){ //Проверяем заполнены ли все поля
        require_once ('applications/verify.php');
        if (verifyUser($_POST['username'],$_POST['password'], $_POST['mail'])){ //Если данные пользователя совпадают с базой данных
            $_SESSION['username'] = $_POST['username'];  //Записываем в сессию имя пользователя (для кнопки logOut)
            $_SESSION['onlineTime'] = time();            //Записываем в сессию время входа на сайт
            if (!empty($_POST['remember'])){ //Если пользователь поставил галочку "Запомнить меня" отслыаем куки с данными
                setcookie('username', $_POST['username'], time() + 60 * 60, '/');
                setcookie('password', $_POST['password'], time() + 60 * 60, '/');
                setcookie('mail', $_POST['mail'], time() + 60 * 60, '/');
            }
            if (isset($_POST['tel'])){               //Если пользователь ввел номер телефона
                setcookie('tel', "", time() - 3600, '/'); //На всякий случай удалим старый номер (может он его сменил)
                setcookie('tel', $_POST['tel'], time() + 60 * 60, '/');// и запишем новое значение
            }        //Теперь в форме, если есть куки с номером телефона, будет автоматически подставлять значение
            require_once ($config['temp'] . 'header.php');
            echo "<div class=\"alert alert-success\" id='alert'><strong>Вы успешно авторизировались</strong></div>";
            require_once ($config['app'] . 'contentReader.php');
        }
        else{ //Если данные не совпадают с базой
            require_once ($config['temp'] . 'header.php');
            require_once ($config['temp'] . 'loginForm.php');
            echo "<div class=\"alert alert-warning\" id='alert'><strong>Неверные данные</strong></div>";
        }
    }
    else{        //Если какое-то поле формы пустое, выведем на экран сообщение о пустых полях и форму авторизации
        require_once ($config['temp'] . 'header.php');
        require_once ($config['temp'] . 'loginForm.php');
        echo "<div class=\"alert alert-warning\" id='alert'><strong>Пустое поле!</strong></div>";
    }
}
elseif (isset($_SESSION['username'])){ //Если все Ок выведем контент
    require_once ($config['temp'] . 'header.php');
    require_once ($config['app'] . 'contentReader.php');
}
elseif ($_COOKIE){ //Если куки есть
    if (isset($_COOKIE['username']) && isset($_COOKIE['password']) && isset($_COOKIE['mail'])){ //Проверяем есть ли нужные значения
        require_once ('applications/verify.php');
        if (verifyUser($_COOKIE['username'],$_COOKIE['password'], $_COOKIE['mail'])){ //Сравниваем с базой данных
            $_SESSION['username'] = $_COOKIE['username'];        //Если все Ок записываем в сессию
            require_once ($config['temp'] . 'header.php');       //И выводим контент
            require_once ($config['app'] . 'contentReader.php');
        }
        else{ //Удаляем куки, если они не совпадают с базой и выводим форму авторизации
            setcookie('username', "", time() - 3600, '/');
            setcookie('password', "", time() - 3600, '/');
            setcookie('mail', "", time() - 3600, '/');
            require_once ($config['temp'] . 'header.php');
            require_once ($config['temp'] . 'loginForm.php');
        }
    }
    else{  // Если нужных значений нет(к примеру пришли только куки 'tel'), выводим форму авторизации
        require_once ($config['temp'] . 'header.php');
        require_once ($config['temp'] . 'loginForm.php');
    }
}
else{//Если все очень плохо
    echo "error";
}

require_once ($config['temp'] . 'footer.php');

