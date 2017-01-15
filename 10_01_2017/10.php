<?php

$om = [10, 10, 10, 10, 10, 10, 10, 10, 10, 10];
echo total_resistance($om);

function total_resistance ($array_in){
    return (array_sum($array_in));
}