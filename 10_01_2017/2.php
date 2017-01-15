<?php

function change_array ($array, $per) {
    if ($per >= 0) {
        $count = count($array);
        for ($x = 0; $x < $count; $x++) {
            $array [$x] = $per * $array [$x];
        }
        return ($array);
    }
    else {
        return ("error");
    }
}

$percent = 0.5;
$mass = [10, 20, 5, 4.4];

print_r(change_array($mass, $percent));