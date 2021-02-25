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
    function checknum($arr)
    {
        $count = 0;
        $loop = 0;
        $found = false;
        while ($count < 5) {
            $loop++;
            $random = rand(0, 99);
            foreach ($arr as $i) {
                if ($i == $random) {
                    $count++;
                    echo "ครั้งที่ " . $loop . " = " . $random . " => ยินดีด้วย คุณมีเลขนี้<br>";
                    $found = true;
                    break;
                }
            }
            if(!$found){
                echo "ครั้งที่ " . $loop . " = " . $random . " => เสียใจด้วย คุณไม่มีเลขนี้<br>";
            }
            else{
                $found = false;
            }
            
        }
        return $loop;
    }
    ?>
    <?php if (isset($_POST['submit'])) : ?>
        <p style="font-size: 20px;">
            <?php $res = checknum($_POST['table']);
            ?>
        </p>
        <p style='color:red;font-size:25px;text-align:center;'>
            คุณจบ BINGO เกมนี้ใน ครั้งที่ <?php echo $res;?>
        </p>
    <?php else : ?>
        <h1 style="text-align: center;">
            BINGO Game
        </h1>
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
                ?>
            </table>
        </center>
        <br>
        <form method="post" action="#" style="text-align: center;">
            <?php
            for ($i = 0; $i < count($numtable); $i++) {
                echo '<input type="hidden" value="' . $numtable[$i] . '"name="table[]">';
            }
            ?>
            <input type="submit" name="submit" value="START GAME" style="font-size:30px;background-color: blue; color:white;">

        </form>
    <?php endif ?>
</body>

</html>