<?php

function addNewUrl($filePath)
{ //Функция добавления в базу
    //Убираем из полученных url, те, которые уже записаны в базу и те, которые в черном списке
    $newUrl = array_diff(file($filePath), file('database/urlDatabase.txt'), file('database/blacklist.txt'));
    $newUrlForEcho = $newUrl;//Копия для вывода на экран
    $diff = array_diff(file($filePath), $newUrl); // url которые были исключены, запишем в массив (для вывода на экран)
    array_push($newUrl, file_get_contents('database/urlDatabase.txt')); //Достаём данные из базы и добавляем новые url
    file_put_contents('database/urlDatabase.txt', $newUrl); //Записываем в базу

    //Вывод результата на экран
    if ($newUrlForEcho) {
        echo "<div class=\"alert alert-info\" id='url'><strong>Записанные URL:</strong><ul>";
        foreach ($newUrlForEcho as $value) {
            echo "<li>$value</li>";
        }
        echo "</ul></div>";
    }
    else{
        echo "<div class=\"alert alert-info\" id='url'><strong>Записанные URL:</strong><br>Нет</div>";
    }

    if ($diff) {
        echo "<div class=\"alert alert-warning\" id='url'><strong>URL из черного списка или имеющиеся в базе:</strong><ul>";
        foreach ($diff as $value) {
            echo "<li>$value</li>";
        }
        echo "</ul></div>";
    }
    unlink($filePath);
}




?>