<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bingo Game</title>
</head>

<body>
    <?php
    $random = 0;
    function checknum($arr)
    {
        global $random;
        $random  = rand(0, 99);
        foreach ($arr as $i) {
            if ($i == $random) {
                return true;
            }
        }
        return false;
    } ?>
    <h1 style="text-align: center;">
        BINGO Game
    </h1>
    <?php if (isset($_POST['submit'])) : ?>
        <?php //print_r($_POST['table']);
        //print_r($_POST['res']);
        //print_r($_POST['Cfound']);
        $found = $_POST['Cfound'];
        $numtable = $_POST['table'];
        $arrres = $_POST['res'];
        ?>
        <center>
            <table style="border-collapse: collapse;border: 1px solid;font-size: 30px;">
                <?php
                $count = -1;
                for ($row = 1; $row <= 5; $row++) {
                    echo "<tr>";
                    for ($col = 1; $col <= 5; $col++) {
                        $count++;
                        echo "<td style='border-collapse: collapse;border: 1px solid;width:100px;text-align:center'>" . $numtable[$count] .
                            "</td>";
                    }
                    echo "</tr>";
                }
                //$res .= checknum($numtable);
                ?>
            </table>
        </center>
        <br>
        <?php $res = checknum($numtable);
        if ($res === true) {
            array_push($arrres, "ครั้งที่ " . (count($arrres)) . " = " . $random . " => ยินดีด้วย คุณมีเลขนี้<br>");
            $found++;
        } else {
            array_push($arrres, "ครั้งที่ " . (count($arrres)) . " = " . $random . " => เสียใจด้วย คุณไม่มีเลขนี้<br>");
        }

        ?>
        <?php if ($found < 5) : ?>
            <form method="post" action="#" style="text-align: center;">
                <?php for ($i = 0; $i < count($numtable); $i++) {
                    echo '<input type="hidden" value="' . $numtable[$i] . '"name="table[]">';
                }
                //echo '<input type="hidden" value="0"name="res[]">';
                for ($i = 0; $i < count($arrres); $i++) {
                    echo '<input type="hidden" value="' . $arrres[$i] . '"name="res[]">';
                }

                ?>
                <input type="hidden" value='<?php echo $found; ?>' name="Cfound">
                <input type="submit" name="submit" value="START GAME" style="font-size:30px;background-color: blue; color:white;">

            </form>
        <?php endif ?>
        <?php //echo $arrres[count($arrres)-1]
        for ($i = 1; $i < count($arrres); $i++) {
            echo $arrres[$i];
        }
        ?>
        <?php if ($found == 5) : ?>
            <br><p style='color:red;font-size:25px;text-align:center;'>คุณจบ BINGO เกมนี้ใน ครั้งที่ <?php echo count($arrres)-1;?> </p>
        <?php endif ?>
    <?php else : ?>

        <center>
            <table style="border-collapse: collapse;border: 1px solid;font-size: 30px;">
                <?php
                $numtable = array();
                $res = "";
                $count = 0;
                for ($row = 1; $row <= 5; $row++) {
                    echo "<tr>";
                    for ($col = 1; $col <= 5; $col++) {
                        $count++;
                        $num = rand(0, 99);
                        array_push($numtable, $num);
                        echo "<td style='border-collapse: collapse;border: 1px solid;width:100px;text-align:center'>" . $num .
                            "</td>";
                    }
                    echo "</tr>";
                }
                //$res .= checknum($numtable);
                ?>
            </table>
        </center>
        <br>
        <form method="post" action="#" style="text-align: center;">
            <!--<input type="hidden" value="<?php //echo $res 
                                            ?>" name="res">-->
            <?php
            for ($i = 0; $i < count($numtable); $i++) {
                echo '<input type="hidden" value="' . $numtable[$i] . '"name="table[]">';
            }

            ?>
            <input type="hidden" value='0' name="res[]">
            <input type="hidden" value='0' name="Cfound">
            <input type="submit" name="submit" value="START GAME" style="font-size:30px;background-color: blue; color:white;">

        </form>
    <?php endif ?>
</body>

</html>