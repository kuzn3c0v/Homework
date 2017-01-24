<?php
    touch("visitsCount.txt");
    $access = "visitsCount.txt";
    $visits = file($access);
    $visits[0] += 1;
    file_put_contents($access, $visits[0]);