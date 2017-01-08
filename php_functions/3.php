<?php

function ari ($a, $b, $c){
    return (($a - $b) / $c);
};

$d = 10;
$e = 2;
$f = 2;

echo "({$d} - {$e}) / {$f} = " . ari($d, $e, $f);