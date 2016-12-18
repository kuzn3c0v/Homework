<table border="1" bgcolor="black">
<?php

for ($a = 1; $a <= 9; $a++){
    echo "<tr>";
    for ($b = 1; $b <= 9; $b++){
        if (($a == 1) || ($b == 1)) {
            echo "<td width='20' align='center' bgcolor='#f0e68c'>" . $a * $b . "</td>";
        }
        else{
            echo "<td width='20' align='center' bgcolor='#fffafa'>" . $a * $b . "</td>";
        }
    }
    echo "</tr>";
}
?>
</table>
