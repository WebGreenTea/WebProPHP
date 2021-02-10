<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> ตัวอย่าง Control statement ที่ 9 </title>
</head>
</head>

<body>
    <form style="font-size: 30px;text-align: center" method="post" action="#">
        Start Number :<input style="font-size: 30px;" type="number" name="start" required><br><br>
        End Number :<input style="font-size: 30px;" type="number" name="end" required><br><br>
        Divide by :<input style="font-size: 30px;" type="number" name="by" required><br><br>
        <input style="font-size: 25px;" type="submit" value="submit" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        /*$found = false;
    for ($num = 100; $num <= 200; $num++) {
        if ($num % 13 == 0) {
            $found = true;
            break;
        }
    }*/
        $start = $_POST['start'];
        $end = $_POST['end'];
        $by = $_POST['by'];
        $resultStr = "";
        $count = 0;
        $found = false;
        $numinloop = $start;
        while ($numinloop <= $end) {
            if ($numinloop % $by == 0) {
                $count++;
                if($count != 1){
                    $resultStr = $resultStr.",";
                }
                $resultStr = $resultStr." $numinloop";
                $found = true;
            }
            $numinloop++;
        }


        if ($found)
            echo "<h2>เลขจำนวนเต็มที่อยู่ในช่วง $start ถึง $end ที่หารด้วย $by ลงตัวมี $count ตัวคือ<br> $resultStr<br><h2>";
        else
            echo "<h2>ไม่มีเลขจำนวนเต็มที่อยู่ในช่วง $start ถึง $end ที่หารด้วย $by ลงตัว<br><h2>";
    }
    ?>
</body>

</html>