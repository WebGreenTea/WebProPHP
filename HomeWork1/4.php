<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW4 : Cal Grade Period Average (GPA)</title>
</head>

<body>
    <?php if (!isset($_GET['submit'])) : ?>
        <h1 style="text-align: center;font-size: 50px">
            HW4 : Cal Grade Period Average (GPA)
        </h1>
        <form style="font-size: 25px;text-align: center" method="get" action="4.php">
            <table border="1" align="center" width="700">
                <tr>
                    <td>ชื่อวิชา</td>
                    <td>หน่วยกิต</td>
                    <td>เกรดที่ได้</td>
                </tr>
                <tr>
                    <td>1. <input style="font-size: 30px;" size="20" type="text" name="sub1" required></td>
                    <td>
                        <select name="credit1" style="font-size: 25px;">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td>
                        <select name="grade1" style="font-size: 25px;">
                            <option value="A">A</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="C+">C+</option>
                            <option value="C">C</option>
                            <option value="D+">D+</option>
                            <option value="D">D</option>
                            <option value="F">F</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>2. <input style="font-size: 30px;" size="20" type="text" name="sub2" required></td>
                    <td>
                        <select name="credit2" style="font-size: 25px;">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td>
                        <select name="grade2" style="font-size: 25px;">
                            <option value="A">A</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="C+">C+</option>
                            <option value="C">C</option>
                            <option value="D+">D+</option>
                            <option value="D">D</option>
                            <option value="F">F</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>3. <input style="font-size: 30px;" size="20" type="text" name="sub3" required></td>
                    <td>
                        <select name="credit3" style="font-size: 25px;">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td>
                        <select name="grade3" style="font-size: 25px;">
                            <option value="A">A</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="C+">C+</option>
                            <option value="C">C</option>
                            <option value="D+">D+</option>
                            <option value="D">D</option>
                            <option value="F">F</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>4. <input style="font-size: 30px;" size="20" type="text" name="sub4" required></td>
                    <td>
                        <select name="credit4" style="font-size: 25px;">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td>
                        <select name="grade4" style="font-size: 25px;">
                            <option value="A">A</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="C+">C+</option>
                            <option value="C">C</option>
                            <option value="D+">D+</option>
                            <option value="D">D</option>
                            <option value="F">F</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>5. <input style="font-size: 30px;" size="20" type="text" name="sub5" required></td>
                    <td>
                        <select name="credit5" style="font-size: 25px;">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                    <td>
                        <select name="grade5" style="font-size: 25px;">
                            <option value="A">A</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="C+">C+</option>
                            <option value="C">C</option>
                            <option value="D+">D+</option>
                            <option value="D">D</option>
                            <option value="F">F</option>
                        </select>
                    </td>
                </tr>
            </table>
            <br>
            <input style="font-size: 25px;" type="submit" value="submit" name="submit">
        </form>
    <?php else : ?>
        <?php function gradeconvert($X){
            if($X == "A"){
                return 4;
            }
            else if($X == "B+"){
                return 3.5;
            }
            else if($X == "B"){
                return 3;
            }
            else if($X == "C+"){
                return 2.5;
            }
            else if($X == "C"){
                return 2;
            }
            else if($X == "D+"){
                return 1.5;
            }
            else if($X == "D"){
                return 1;
            }
            else{
                return 0;
            }
        }?>
        <div style="font-size: 25px;text-align: center">
            <table border="1" align="center" width="700">
                <tr>
                    <td>ชื่อวิชา</td>
                    <td>หน่วยกิต</td>
                    <td>เกรดที่ได้</td>
                </tr>
                <tr>
                    <td>1.<?php echo $_GET['sub1']; ?></td>
                    <td><?php echo $_GET['credit1']; ?></td>
                    <td><?php echo $_GET['grade1']; ?></td>
                </tr>
                <tr>
                    <td>2.<?php echo $_GET['sub2']; ?></td>
                    <td><?php echo $_GET['credit2']; ?></td>
                    <td><?php echo $_GET['grade2']; ?></td>
                </tr>
                <tr>
                    <td>3.<?php echo $_GET['sub3']; ?></td>
                    <td><?php echo $_GET['credit3']; ?></td>
                    <td><?php echo $_GET['grade3']; ?></td>
                </tr>
                <tr>
                    <td>4.<?php echo $_GET['sub4']; ?></td>
                    <td><?php echo $_GET['credit4']; ?></td>
                    <td><?php echo $_GET['grade4']; ?></td>
                </tr>
                <tr>
                    <td>5.<?php echo $_GET['sub5']; ?></td>
                    <td><?php echo $_GET['credit5']; ?></td>
                    <td><?php echo $_GET['grade5']; ?></td>
                </tr>
                <?php
                    $sumcredit = $_GET['credit1']+$_GET['credit2']+$_GET['credit3']+$_GET['credit4']+$_GET['credit5'];
                    $sumgrade = ($_GET['credit1']*(gradeconvert($_GET['grade1'])))+
                    ($_GET['credit2']*(gradeconvert($_GET['grade2'])))+
                    ($_GET['credit3']*(gradeconvert($_GET['grade3'])))+
                    ($_GET['credit4']*(gradeconvert($_GET['grade4'])))+
                    ($_GET['credit5']*(gradeconvert($_GET['grade5'])));
                    $GPA = $sumgrade/$sumcredit;
                ?>
                <tr>
                    <td colspan="3">เกรดเฉลี่ย (GPA) : <?php echo number_format($GPA,3)?></td>
                </tr>
            </table>
        </div>
    <?php endif ?>
</body>

</html>