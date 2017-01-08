<?php

function letter ($a) {
    return ($a = mb_strtoupper ($a));
};

$mass = ['a', 'b', 'c', 'd', 'e',];
$mass = array_map("letter", $mass);

print_r($mass);
