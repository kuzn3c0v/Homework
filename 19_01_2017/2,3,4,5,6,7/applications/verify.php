<?php

//Верификация пользователя
function verifyUser($username, $password, $mail){
    $data = unserialize(file_get_contents('./database/users.db'));

    $status = false;

    foreach ($data as $key => $value){
        if (($value['username'] == $username) && ($value['mail'] == $mail)
            && (password_verify($password, $value['password']))){
            $status = true;
        }
    }
    return $status;
}

?>