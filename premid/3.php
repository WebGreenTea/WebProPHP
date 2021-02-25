<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>

<body>
    <?php
    function checkNum($start, $end, $divi)
    {
        $res = "";
        for ($i = $start; $i <= $end; $i++) {
            if ($i % $divi == 0) {
                $res .= $i . ",";
            }
        }
        echo $res;
    }
    function countNum($start, $end, $divi)
    {
        $res = 0;
        for ($i = $start; $i <= $end; $i++) {
            if ($i % $divi == 0) {
                $res++;
            }
        }
        echo $res;
    }
    function sumNum($start, $end, $divi)
    {
        $res = 0;
        for ($i = $start; $i <= $end; $i++) {
            if ($i % $divi == 0) {
                $res += $i;
            }
        }
        echo $res;
    }

    ?>

    <table align="center">
        <form method="get" action="#">
            <tr>
                <td>ค่าเริ่มต้น:</td>
                <td><input type="number" name="start" required value="<?php if(isset($_GET['start'])){echo $_GET['start'];}?>"></td>
            </tr>
            <tr>
                <td>ค่าสุดท้าย:</td>
                <td><input type="number" name="end" required value="<?php if(isset($_GET['end'])){echo $_GET['end'];}?>"></td>
            </tr>
            <tr>
                <td>ตัวเลขที่นำไปหาร:</td>
                <td><input type="number" name="divi" required value="<?php if(isset($_GET['divi'])){echo $_GET['divi'];}?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Check Num"></td>
            </tr>
        </form>
        <?php if (isset($_GET['submit'])) : ?>
            <?php $start = $_GET['start'];
            $end = $_GET['end'];
            $divi = $_GET['divi'];
            ?>
            <tr>
                <td colspan="2"><?php checkNum($start, $end, $divi) ?></td>
            </tr>
            <tr>
                <td colspan="2">จำนวนที่หารลงตัว = <?php countNum($start, $end, $divi) ?> ตัว</td>
            </tr>
            <tr>
                <td colspan="2">ผลรวมของตัวเลขที่หารลงตัว = <?php sumNum($start, $end, $divi) ?></td>
            </tr>
        <?php endif ?>
    </table>


</body>

</html>