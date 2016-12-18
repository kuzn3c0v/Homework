<table border="1" bgcolor="black">
<?php

$row = rand(5, 30);
$cols = rand(5, 30);
$colors = ['red','yellow','blue','gray','maroon','brown','green'];

for ($i = 1; $i <= $row; $i++) {
    echo "<tr>";
    for ($p = 1; $p <= $cols; $p++) {
        $a = $colors [rand(0, 6)];
        echo "<td bgcolor='$a'>" . rand(1000, 99999) . "</td>";
    }
    echo "</tr>";
}
?>
</table>