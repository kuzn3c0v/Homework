<table border="1" bgcolor="#708090">
<?php

for ($i = 1; $i <= 15; $i++) {
    $mass [] = rand(1, 100);
}
$max = 0;
$min = max($mass);
echo "<tr>";
echo "<td width='20' align='center' bgcolor='#bcdbc2'> До замены</td>";
foreach ($mass as $key => $val) {
    echo "<td width='20' align='center' bgcolor='#f0f8ff'>$val</td>";
    if ($max < $val) {
        $max = $val;
        $indmax = $key;
    }
    if ($min > $val) {
        $min = $val;
        $indmin = $key;
    }
}
echo "</tr>";
echo "<br> Max value = " . max($mass) . "<br> Min value = " . min($mass) . "<br>";

$mass [$indmax] = $min;
$mass [$indmin] = $max;

echo "<tr>";
echo "<td width='20' align='center' bgcolor='#bcdbc2'>После замены</td>";
foreach ($mass as $key => $val) {
    if (($key == $indmax) || ($key == $indmin)) {
        echo "<td width='20' align='center' bgcolor='#bcdbc2'>{$val}</td>";
    }
    else {
        echo "<td width='20' align='center' bgcolor='#f0f8ff'>{$val}</td>";
    }
}
echo "</tr>";
?>
</table>
