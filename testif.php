<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form style="font-size: 30px;text-align: center" method="get" action="#">
        <input style="font-size: 30px;" type="text" name="number" required><br><br>
        <input style="font-size: 25px;" type="submit" value="submit" name="submit">
    </form>
    <h1>

        <?php
        if (isset($_GET['submit'])) {
            $strnum = $_GET['number'];
            $zero = 0;
            $even = 0;
            $odd = 0;
            $a = 0;
            while ($a < strlen($strnum)) {
                if ($strnum[$a] == 0) {
                    $zero += 1;
                } else if ($strnum[$a] % 2 == 0) {
                    $even += 1;
                } else {
                    $odd += 1;
                }
                $a++;
            }

            echo "Num is $strnum<br>";
            //echo "Odd = $odd <br>";
            //echo "Even = $even <br>";
            //echo "Zero = $zero <br>";
            echo "<table border=1>";
            echo "<tr><td>Odd = </td>";
            echo "<td>" . $odd . "</td>";
            echo "</tr>";
            echo "<tr><td>Even = </td>";
            echo "<td>" . $even . "</td>";
            echo "</tr>";
            echo "<tr><td>Zero = </td>";
            echo "<td>" . $zero . "</td>";
            echo "</tr>";
            echo "</table>";
        }

        ?>
    </h1>
</body>

</html>