<!DOCTYPE html>
<html>

<head>
    <title>Update Table Book</title>
    <meta charset="utf-8">
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['id'])) {
        header('location: login.php');
    }
    $level = $_SESSION['level'];
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookit";
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    if (!$conn) die("ไม่สามารถติดต่อกับ MySQL ได้");
    mysqli_set_charset($conn, "utf8");
    $sqltxt = mysqli_query($conn, "SELECT * FROM book order by BookID")
        or die(mysqli_error($conn)); ?>

    <center>
        <h1><?php echo $level ?>: <?php echo $_SESSION['name'] ?></h1>
    </center>


    <CENTER>
        <H3>รายชื่อหนังสือ</H3>
    </CENTER>

    <table width="400" border="0" bordercolor="D1D7DA" align="center" valign="top">
        <br><b>
            <tr align="center" bgcolor="#0099CC">
                <td width="30" align="center">ลำดับ</td>
                <td width="100" align="center">รหัสหนังสือ</td>
                <td align="center" width="200">ชื่อหนังสือ</td>
                <?php if ($level == 'admin') : ?>
                    <td align="center" width="80">แก้ไข</a></td>
                    <td align="center" width="80">ลบ</a></td>
                <?php endif ?>
            </tr>
            <?php
            $a = 1;
            while ($rs = mysqli_fetch_array($sqltxt)) { ?>
                <tr align="center" bgcolor="#CCFFFF">
                    <td align="center" bgcolor="#0099CC"><?php echo $a ?></td>
                    <td align="center">
                        <a href="detailbook.php?id=<?php echo $rs[0]; ?>"><?php echo $rs[0] ?></a>
                    </td>
                    <td align="center"><?php echo $rs[1] ?></td>
                    <?php if ($level == 'admin') : ?>
                        <td align="center">
                            <a href="updatebook.php?id=<?php echo $rs[0] ?>" onclick="return confirm(' ยืนยันการแก้ไขข้อมูลหนังสือ <?php echo $rs[1] ?> ')">[แก้ไข]</a>
                        </td>
                        <td align="center">
                            <a href="deletebook.php?id=<?php echo $rs[0] ?>" onclick="return confirm(' ยืนยันการลบข้อมูลหนังสือ <?php echo $rs[1] ?>')">[ลบ]</a>
                        </td>
                    <?php endif ?>
                </tr>
            <?php $a++;
            } ?>

    </table><BR><BR>
    <?php if ($level == 'admin') : ?>
        <div align="center"> <A HREF="addbook.php">เพิ่มรายการหนังสือ</A></div><BR>
    <?php endif ?>
    <div align="center"> <A HREF="logout.php">ออกจากระบบ</A></div><BR>
    <?php
    mysqli_close($conn);
    ?>