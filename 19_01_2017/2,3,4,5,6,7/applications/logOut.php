<?php
session_start();
setcookie('username', "", time() - 3600, '/');
setcookie('password', "", time() - 3600, '/');
setcookie('mail', "", time() - 3600, '/');
session_destroy();



header('Location: ../index.php');

?>
