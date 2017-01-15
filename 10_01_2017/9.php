<?php

echo count_in(1, 2, 3);

function count_in (){
    return (func_num_args());
}
