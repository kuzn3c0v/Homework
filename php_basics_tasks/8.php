<?php

var_dump((boolean)20);   //Любое ненулевое число, как положительное так и отрицательное будет true
var_dump((boolean)0);    //Соотвественно 0 (0.0), пустая строка будет false
var_dump((boolean)-20);  //

echo "<br>Какой-то текст 1 <br>";
print "Какой-то текст 2 <br>";
echo <<<Here
Какой-то текст 3 <br>
Here;

?>

Какой-то текст 4<br>

<?php

/*Пример коммента 1*/
//пример коммента 2
#Пример коммента 3

/* <?php и <? это одинаковы открывающий тег, однако <? работает в случае включенной опции short_open_tag
в  php.ini */

define('DAYS_COUNT', 5);
const MONTH_COUNT =12;
