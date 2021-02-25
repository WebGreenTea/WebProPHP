<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarPay</title>
</head>

<body>
    <form method="get" action="CarSell.php">
        <table border="1" style="font-size: 25px;" align="center">
            <tr>
                <td>ชื่อ นามสกุล ลูกค้า:</td>
                <td><input style="font-size: 25px;"type="text" name="name" required></td>
            </tr>
            <tr>
                <td>จำนวนเงินที่ต้องการผ่อน ต่อ 1 งวด:</td>
                <td><input style="font-size: 25px;"type="number" name="money" required></td>
            </tr>
            <tr>
                <td>จำนวนงวด ที่ต้องการ:</td>
                <td><select name="count" style="font-size: 25px;">
                    <option value="36">36</option>
                    <option value="48">48</option>
                    <option value="60">60</option>
                    <option value="72">72</option>
                    </select></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center"><input style="font-size: 25px;" type="submit" name="submit" value="ซื้อรถ"></td>
            </tr>
        </table>
    </form>
</body>

</html>