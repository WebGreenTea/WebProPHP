<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update book </title>
</head>
<body>
    <?php
        $hostname = "localhost";
        $username = "root";
        $password = "12345";
        $dbname = "bookit";
        $conn = mysqli_connect($hostname, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");

        $id = $_GET["id"];
        $sql = "SELECT * FROM book where BookID = $id";
        $result = mysqli_query($conn,$sql);
        $data = mysqli_fetch_array($result);
    ?>

    <form action="savebookupdate.php" method="post" name="save" enctype="multipart/form-data">
        <table border="1" align="canter" bgcolor="#FFCCCC">
            <tr>
                <td align="center" colspan="2" bgcolor="#FF99CC">
                    <b>แก้ไขรายละเอียดหนังสือ</b>
                </td>
            </tr>
            <tr>
                <td>
                    รหัสหนังสือ : 
                </td>
                <td>
                    <input type="text" name="BookID" value="<?php $data["BookID"]?>" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    ชื่อหนังสือ : 
                </td>
                <td>
                    <input type="text" name="BookName" value="<?php $data["BookName"]?>">
                </td>
            </tr>
            <tr>
                <td>
                    สำนักพิมพ์ : 
                </td>
                <td>
                    <input type="text" name="Publish" value="<?php $data["Publish"]?>">
                </td>
            </tr>
            <tr>
                <td>
                    ราคาซื้อ : 
                </td>
                <td>
                    <input type="text" name="UnitPrice" value="<?php $data["UnitPrice"]?>">
                </td>
            </tr>
            <tr>
                <td>
                    ราคาเช่า : 
                </td>
                <td>
                    <input type="text" name="UnitRent" value="<?php $data["UnitRent"]?>">
                </td>
            </tr>
    
        </table>
        <br>
        <div align="center">
            <input type="submit" name="Submit" value="แก้ไขข้อมูล" style="cursor: hand">
            <input type="reset" name="reset" value="ยกเลิก" style="cursor: hand">
        </div>
    </form>
    <div align="center">
        <a href="listofbook2.php">กลับหน้าหลัก</a><br>
    </div>
</body>
</html>