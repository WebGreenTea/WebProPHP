<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW4 : Cal Grade Period Average (GPA)</title>
</head>

<body>
    <?php if(!isset($_GET['submit'])):?>
    <h1 style="text-align: center;font-size: 50px">
        HW4 : Cal Grade Period Average (GPA)
    </h1>
    <form style="font-size: 25px;text-align: center" method="get" action="4.php">
    <table  border="1" align="center" width="500">
        <tr>
            <td>ชื่อวิชา</td>
            <td>หน่วยกิต</td>
            <td>เกรดที่ได้</td>
        </tr>
        <tr>
            <td>1. <input style="font-size: 30px;" size="12" type="text" name="sub1" required></td>
            <td>
                <select name="credit1" style="font-size: 25px;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </td>
            <td>
            <select name="grade1" style="font-size: 25px;">
                    <option value="4">A</option>
                    <option value="3.5">B+</option>
                    <option value="3">B</option>
                    <option value="2.5">C+</option>
                    <option value="2">C</option>
                    <option value="1.5">D+</option>
                    <option value="1">D</option>
                    <option value="0">F</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>2. <input style="font-size: 30px;" size="12"  type="text" name="sub2" required></td>
            <td>
                <select name="credit2" style="font-size: 25px;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </td>
            <td>
            <select name="grade2" style="font-size: 25px;">
                    <option value="4">A</option>
                    <option value="3.5">B+</option>
                    <option value="3">B</option>
                    <option value="2.5">C+</option>
                    <option value="2">C</option>
                    <option value="1.5">D+</option>
                    <option value="1">D</option>
                    <option value="0">F</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>3. <input style="font-size: 30px;" size="12" type="text" name="sub3" required></td>
            <td>
                <select name="credit3" style="font-size: 25px;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </td>
            <td>
            <select name="grade3" style="font-size: 25px;">
                    <option value="4">A</option>
                    <option value="3.5">B+</option>
                    <option value="3">B</option>
                    <option value="2.5">C+</option>
                    <option value="2">C</option>
                    <option value="1.5">D+</option>
                    <option value="1">D</option>
                    <option value="0">F</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>4. <input style="font-size: 30px;" size="12" type="text" name="sub4" required></td>
            <td>
                <select name="credit4" style="font-size: 25px;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </td>
            <td>
            <select name="grade4" style="font-size: 25px;">
                    <option value="4">A</option>
                    <option value="3.5">B+</option>
                    <option value="3">B</option>
                    <option value="2.5">C+</option>
                    <option value="2">C</option>
                    <option value="1.5">D+</option>
                    <option value="1">D</option>
                    <option value="0">F</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>5. <input style="font-size: 30px;" size="12" type="text" name="sub5" required></td>
            <td>
                <select name="credit5" style="font-size: 25px;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </td>
            <td>
            <select name="grade5" style="font-size: 25px;">
                    <option value="4">A</option>
                    <option value="3.5">B+</option>
                    <option value="3">B</option>
                    <option value="2.5">C+</option>
                    <option value="2">C</option>
                    <option value="1.5">D+</option>
                    <option value="1">D</option>
                    <option value="0">F</option>
                </select>
            </td>
        </tr>
    </table>
    <br>
    <input style="font-size: 25px;" type="submit" value="submit" name="submit">
    </form>
    <?php else:?>
        
    <?php endif?>
</body>

</html>