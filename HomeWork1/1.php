<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW1 : Find Min Max Averrage</title>
</head>

<body>
    <h1 style="text-align: center;font-size: 50px">
        HW1 : Find Min Max Averrage
    </h1>
    <form style="font-size: 30px;text-align: center" method="get" action="1.php">
        Num1:<input style="font-size: 30px;" type="number" name="num1" value="<?php echo $_GET['num1']; ?>" required><br><br>
        Num2:<input style="font-size: 30px;" type="number" name="num2" value="<?php echo $_GET['num2']; ?>" required><br><br>
        Num3:<input style="font-size: 30px;" type="number" name="num3" value="<?php echo $_GET['num3']; ?>" required><br><br>

        <input style="width: 25px;height: 25px;" type="radio" name="caltype" value="min"<?php if (isset($_GET['caltype'])) {if($_GET['caltype'] == "min"){echo "checked";}}?>> Minimum<br>
        <input style="width: 25px;height: 25px;" type="radio" name="caltype" value="max"<?php if (isset($_GET['caltype'])) {if($_GET['caltype'] == "max"){echo "checked";}}?>> Maximum<br>
        <input style="width: 25px;height: 25px;" type="radio" name="caltype" value="aver"<?php if (isset($_GET['caltype'])) {if($_GET['caltype'] == "aver"){echo "checked";}}?>> Average<br>
        <br><br>
        <!-- <input style="font-size: 25px;" type="submit" value="submit">-->
        <button style="font-size: 25px;" type="submit" name="submit">submit</button>
    </form>

    <p style="font-size: 30px;text-align: center">
        <?php
        if (isset($_GET['submit'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $num3 = $_GET['num3'];
            if (isset($_GET['caltype'])) {
                $typecal = $_GET['caltype'];
                if ($typecal == "min") { //find minimum
                    echo "Minimum number = " . (min($num1, $num2, $num3));
                } else if ($typecal == "max") { //find maximum
                    echo "Maximum number = " . (max($num1, $num2, $num3));
                } else if ($typecal == "aver") { //find average
                    $sum = $num1 + $num2 + $num3;
                    echo "Average number = " . ($sum / 3);
                }
            }
        }?>
    </p>

</body>

</html>