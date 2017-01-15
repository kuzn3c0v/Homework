<?php

$start = 2;                               //Задаваемый промежуток от
$finish = 200;                            //и до

print_r(prime_number($start, $finish));

function prime_number ($sta, $fin){

    if (($sta < 2) || ($fin < 2) || ($sta > $fin)){        //проверка что числа больше 1
        return ("error");
    }

    $numbers = [];
    for ($x = $sta; $x <= $fin; $x++){    //Заполняем массив числами с заданным промежутком
        $numbers [$x] = $x;
    }

    foreach ($numbers as $first_value){     //Если второй foreach удалит значение, далее здесь оно не запустится
        foreach ($numbers as $key => $second_value){
            if (($first_value != $second_value) && (($second_value % $first_value) == 0)){
                //Если это не два одинаковых числа и нет остатка от деления, то оно удалит этот элемент из массива
                unset($numbers [$key]);
            }
        }
    }
    return ($numbers);
}