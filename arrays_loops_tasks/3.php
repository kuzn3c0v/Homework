<?php

$mass = [26, 17, 136, 12, 79, 15];
$result = 0;
foreach ($mass as $a){
    $result += ($a ** 2);
}
echo $result;