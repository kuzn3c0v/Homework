<?php

function makeString($value, $pathIn = null){
    $startImg = "<li><img src=\"Other/pictures/";
    $finishImg = ".png\" width='20' > <strong>" . pathinfo($value, PATHINFO_FILENAME);

    if (func_num_args() == 2) {
        $filePath = $pathIn . DIRECTORY_SEPARATOR . $value;
        $fileExtension = $startImg . pathinfo($value, PATHINFO_EXTENSION) . $finishImg;

        return ($fileExtension . "</strong>  (" . filesize($filePath) . " bytes)" . " Дата последнего изменения "
            . date("F d Y H:i:s.", filemtime($filePath)) . "</li>");
    }
    elseif (func_num_args() == 1){
        return($startImg . "folder" . $finishImg . "</strong></li>");
    }
    else{
        return('error');
    }
}
?>