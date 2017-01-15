<?php
$number = 55;
echo checkInterval($number);

function checkInterval ($numIn){
    if (($numIn >= 50) && ($numIn <= 100)){
        return ("Число {$numIn} содержится в интервале.");
    }
    else{
        return ("Число {$numIn} не содержится в интервале.");
    }
}