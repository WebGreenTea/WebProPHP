<?php
echo "<table border=\"1\">";
for ($y = 0; $y < 3; $y++) {
    echo "<tr>\n"; {
        for ($x = 0; $x < 2; $x++) {
            echo "\t<td align=\"center\" width=\"34\">";
            $t[$y][$x] = 2 * $y + $x;
            echo $t[$y][$x];
            echo "</td>\n";
        }
        echo "</tr>\n";
    }
}
echo "</table>";
?>