<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Sell</title>
</head>

<body>
    <?php if (!isset($_GET['submit'])) {
        header('location: CarPay.php');
    } ?>
    <?php
    function carCheck($money)
    {
        $flag = false;
        echo "<tr>";
        if ($money >= 749000) {
            echo "<td colspan='2'>รถยนต์ที่ท่านสามารถเลือกซื้อได้</td>";
            $flag = true;
        } else {
            echo "<td colspan='2'>ยอดรวมเงินของท่านไม่เพียงพอ ที่จะซื้อรถยนต์ได้;<td>";
        }
        echo "</tr>";
        if ($flag) {
            if ($money >= 1799000) {
                echo "<tr><td><img src='img/Accord.png'><img src='img/logo-accord.png'></td><td>ราคา 1,799,000 บาท</td></tr>";
            }
            if ($money >= 1149000) {
                echo "<tr><td><img src='img/Civic.png'><img src='img/logo-civic.png'></td><td>ราคา 1,149,000 บาท</td></tr>";
            }
            if ($money >= 849000) {
                echo "<tr><td><img src='img/Jazz.png'><img src='img/logo-jazz.png'></td><td>ราคา 849,000 บาท</td></tr>";
            }
            if ($money >= 749000) {
                echo "<tr><td><img src='img/City.png'><img src='img/logo-city.png'></td><td>ราคา 749,000 บาท</td></tr>";
            }
        }
    }
    ?>
    <?php $name = $_GET['name'];
    $money = $_GET['money'];
    $count = $_GET['count'];
    $totalmoney = $money * $count;
    ?>
    <table border="1" style="font-size: 25px;" align="center">
        <tr>
            <td>ชื่อลูกค้า:</td>
            <td><?php echo $name ?></td>
        </tr>
        <tr>
            <td>ผ่อนงวดละ:</td>
            <td><?php echo number_format($money) ?></td>
        </tr>
        <tr>
            <td>จำนวนงวด:</td>
            <td><?php echo $count ?></td>
        </tr>
        <tr>
            <td>ยอดรวมเงิน:</td>
            <td><?php echo number_format($totalmoney) ?></td>
        </tr>
        <?php carCheck($totalmoney) ?>

        <tr>
            <td colspan="2" align="center"><a href="CarPay.php"><button>Back to Home</button></a></td>
        </tr>

    </table>
</body>

</html>