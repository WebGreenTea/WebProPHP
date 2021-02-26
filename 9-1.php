<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 9-1 </title>
</head>

<body>
    <?php
    $weekdays = array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์");
    echo '<center><font size="4" color="blue">'.date("d M Y").'</font></center>';
    echo '<center><font size="4" color="blue">มกราคม 2564</font>';
    echo '<font size="5" color="red"></font>';
    echo '<font size="4" color="blue"></font></center>';
    echo '<table border="1" align="center">';
    echo '<tr>';
    for ($n = 0; $n < 7; $n++) {
        echo '<td align="center" width="90">' . $weekdays[$n] . '</td>';
    }
    print_month(-4,31,6);
    echo '</tr></table>';
    echo '<center><font size="4" color="blue">กุมภาพันธ์ 2564</font>';
    echo '<font size="5" color="red"></font>';
    echo '<font size="4" color="blue"></font></center>';
    echo '<table border="1" align="center">';
    echo '<tr>';
    for ($n = 0; $n < 7; $n++) {
        echo '<td align="center" width="90">' . $weekdays[$n] . '</td>';
    }
    print_month(-1,28,5);
    echo '</tr></table>';
    echo '<center><font size="4" color="blue">มีนาคม 2564</font>';
    echo '<font size="5" color="red"></font>';
    echo '<font size="4" color="blue">'.'</font></center>';
    echo '<table border="1" align="center">';
    echo '<tr>';
    for ($n = 0; $n < 7; $n++) {
        echo '<td align="center" width="90">' . $weekdays[$n] . '</td>';
    }
    print_month(-1,31,5);
    echo '</tr></table>';
    function print_month($n,$d,$r)
    {
        $day = $n;
        for ($row = 1; $row <= $r; $row++) {
            echo '<tr>';
            for ($col = 1; $col <= 7; $col++) {
                if (($day >= 1) && ($day <= $d))
                    echo '<td align="center">' . $day . '</td>';
                else
                    echo '<td align="center"> </td>';
                $day++;
            }
        }
    }
    ?>
</body>

</html>