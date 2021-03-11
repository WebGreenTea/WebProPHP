<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myStyle.css">
    <title>Document</title>
</head>

<body>
    <?php
    function DownPayment($percen, $price)
    {
        return ($price * $percen) / 100;
    }
    function  installment($price, $down)
    {
        return $price - $down;
    }
    function interestYear($installment, $year)
    {
        return ($installment * $year) / 100;
    }
    function  interestTotal($interestYear, $time)
    {
        return $interestYear*($time/12);
    }
    function payMonth($installment,$interestTotal,$time){
        return ($installment+$interestTotal)/$time;
    }
    ?>
    <?php if (isset($_GET['submit'])) : ?>
        <?php $cname = $_GET['carname']; ?>
        <div class="inline1" id="divleft">
            <?php if ($cname == "Accord") : ?>
                <?php $price = 1799000;
                $year = 2; ?>
                <img src="Pic/logo-accord.png" class="logo"><br>
                <img src="Pic/Accord.png" class="carpic">
            <?php elseif ($cname == "Civic") : ?>
                <?php $price = 1145000;
                $year = 2; ?>
                <img src="Pic/logo-civic.png" class="logo"><br>
                <img src="Pic/Civic.png" class="carpic">
            <?php elseif ($cname == "Jazz") : ?>
                <?php $price = 754000;
                $year = 4; ?>
                <img src="Pic/logo-jazz.png" class="logo"><br>
                <img src="Pic/Jazz.png" class="carpic">
            <?php elseif ($cname == "City") : ?>
                <?php $price = 749000;
                $year = 4; ?>
                <img src="Pic/logo-city.png" class="logo"><br>
                <img src="Pic/City.png" class="carpic">
            <?php endif ?>
        </div>
        <div class="inline2" id="fontchange">
            <form action="#" method="get">
                <fieldset id="fildpad">
                    <legend>เลือกเงินดาวน์</legend>
                    เงินดาวน์<input type="radio" name="type" onclick="typeinput(1)" required><select id="percen" name="percen" disabled>
                        <option value="15">15%</option>
                        <option value="20">20%</option>
                        <option value="25">25%</option>
                        <option value="30">30%</option>
                    </select>
                    หรือ ระบุจำนวนเงิน <input type="radio" name="type" onclick="typeinput(2)">
                    <input type="number" name="money" id="money" required disabled> บาท
                </fieldset>
                <fieldset id="fildpad">
                    <legend>เลือกระยะเวลาการผ่อนชำระ</legend>
                    ระยะเวลา <select name="time">
                        <option value="36">36</option>
                        <option value="48">48</option>
                        <option value="60">60</option>
                        <option value="72">72</option>
                    </select>
                    งวด
                </fieldset>
                <input type="hidden" name="submit" value="submit">
                <input type="hidden" name="carname" value="<?php echo $cname ?>">
                <p class="center"><input type="submit" name="cal" value="Calculate" id="fontbutton"></p>
            </form>
            <?php if (isset($_GET['cal'])) : ?>
                <center>
                    <table border="1">
                        <tr>
                            <td colspan="2" class="center">รายงานคำนวณสินเชื่อผ่อนชำระ</td>
                        </tr>
                        <tr>
                            <td>รุ่นรถยนต์</td>
                            <td><?php echo $cname ?></td>
                        </tr>
                        <tr>
                            <td>ราคาถยนต์</td>
                            <td><?php echo number_format($price) ?> บาท</td>
                        </tr>
                        <tr>
                            <td>(1) เงินดาวน์ :</td>
                            <td><?php
                                if (isset($_GET['percen'])) {
                                    $down = DownPayment($_GET['percen'], $price);
                                    echo number_format($down);
                                } else {
                                    $down = $_GET['money'];
                                    echo number_format($down);
                                } ?>
                                บาท
                                <?php if (isset($_GET['percen'])) {
                                    echo "(" . $_GET['percen'] . "%)";
                                } ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                (2) จำนวนเงินที่ขอสินเชื่อ :
                            </td>
                            <td>
                                <?php $installment = installment($price, $down);
                                echo number_format($installment); ?> บาท
                            </td>
                        </tr>
                        <tr>
                            <td>(3)ดอกเบี้ย ต่อปี : </td>
                            <td><?php
                                $interestYear = interestYear($installment, $year);
                                echo number_format($interestYear) . " บาท (" . $year . "%ต่อปี)";
                                ?></td>
                        </tr>
                        <tr>
                            <td>(4)ดอกเบี้ย ทั้งหมด <?php echo $_GET['time'] / 12; ?>ปี (<?php echo $_GET['time'] ?>งวด) : </td>
                            <td>
                                <?php $interestTotal = interestTotal($interestYear,$_GET['time']);
                                echo number_format($interestTotal);
                                ?> บาท
                            </td>
                        </tr>
                        <tr>
                            <td>(5)จำนวนเงินที่ต้องผ่อน ต่อ 1 งวด : </td>
                            <td>
                                <?php 
                                    $payMonth = payMonth($installment,$interestTotal,$_GET['time']);
                                    echo number_format($payMonth);
                                ?> บาท
                            </td>
                        </tr>
                        <tr>
                            <td class="center" colspan="2"><a href="index.php"><button id="fontbutton">กลับไปหน้าแรก</button></a></td>
                        </tr>

                    </table>
                </center>
            <?php endif ?>
        </div>
    <?php else : ?>
        <?php header('location: index.php'); ?>
    <?php endif ?>

</body>
<script>
    function typeinput(type) {
        let elePercen = document.getElementById("percen");
        let elemoney = document.getElementById("money");
        if (type == 1) {
            elePercen.removeAttribute("disabled");
            elemoney.setAttribute("disabled", "");
        } else {
            elemoney.removeAttribute("disabled");
            elePercen.setAttribute("disabled", "");
        }
    }
</script>

</html>