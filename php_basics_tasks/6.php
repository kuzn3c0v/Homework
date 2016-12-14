<?php

$a = 10;
$b = "5";
$operator = "*";

if (is_numeric($a) && is_numeric($b)){
    if ($b != 0) {
        switch ($operator) {
            case "-":
                echo $a - $b;
                break;
            case "+":
                echo $a + $b;
                break;
            case "/":
                echo $a / $b;
                break;
            case "*":
                echo $a * $b;
                break;
            case "%":
                echo $a % $b;
                break;
            default:
                echo "Неизвестный оператор";
                break;
        }
    }
    else{
        echo "Деление на ноль!";
    }
}
else{
    echo "Некорректные данные, введите цифры";
}