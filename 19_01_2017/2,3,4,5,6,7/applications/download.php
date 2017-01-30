<?php

$dataPath = '../database/statistic.db';
touch($dataPath);

$file = $_GET['file'];

if ($stat = unserialize(file_get_contents($dataPath))){
    $new = true;
    foreach ($stat as $key => $value) {
        if ($value['filename'] == $file) { //Если уже файл хоть раз скачивался
            $stat[$key]['downloadCount'] += 1;//увеличим счетчик на 1
            $new = false;
            file_put_contents($dataPath, serialize($stat));
            break;
        }
    }
    if ($new){ //Если первый раз
        $stat [] =  ['filename' => $file, 'downloadCount' => 1];
        file_put_contents($dataPath, serialize($stat));
    }
}
else {//Если база пустая
    $stat [] = ['filename' => $file, 'downloadCount' => 1];
    file_put_contents($dataPath, serialize($stat));
}

$file = "../uploads/" . $file;

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: image/jpeg');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
