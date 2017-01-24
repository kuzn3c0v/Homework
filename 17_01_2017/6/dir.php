<?php

function folders($dirIn){
    $result = [];
    $handle = opendir($dirIn);

    while (false !== ($objectName = readdir($handle))) {
        if ($objectName == '.' or $objectName == '..') {
            continue;
        }
        if (!is_dir($dirIn . DIRECTORY_SEPARATOR . $objectName)) {
            $result[] = $objectName;
        }
        if (is_dir($dirIn . DIRECTORY_SEPARATOR . $objectName)) {
            $result[$objectName] = folders($dirIn . DIRECTORY_SEPARATOR . $objectName);
        }
    }
    return $result;
}

?>