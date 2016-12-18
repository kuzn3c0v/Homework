<table border="1" bgcolor="black">
<?php

$mass = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($mass as $num){
    $b = 1;
    echo "<tr>";
    while ($b <= count($mass)) {
        if (($num == 1) || ($b == 1)) {
            echo "<td width='20' align='center' bgcolor='#f0e68c'>" . $num * $b . "</td>";
        }
        else {
            echo "<td width='20' align='center' bgcolor='#fffafa'>" . $num * $b . "</td>";
        }
        $b++;
    }
    echo "</tr>";
}