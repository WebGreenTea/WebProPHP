<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php $servername = "localhost";
    $username = "root";
    $password = "12345";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } ?>
    <form method="get" action="3cal.php">
        <?php $sql = "SHOW DATABASES";
        $result =  mysqli_query($conn, $sql);
        echo '<br>';?>
        <select name="dbName">
        <?php while ($row = mysqli_fetch_row($result)) { ?>
            <?php if($row[0] != "information_schema" && $row[0] != "performance_schema" && $row[0] !="phpmyadmin" && $row[0] !="mysql"):?>
                <option value="<?php echo $row[0]?>"><?php echo $row[0]?></option>
            <?php endif?>
        <?php } ?>
        </select>
        <!--ชื่อฐานข้อมูลที่ต้องการ <input type="text" required name="dbName">-->
        ชื่อตารางที่ต้องการ <input type="test" required name="tablename">
        <input type="submit" name="submit" value="ตกลง">
    </form>
    <?php mysqli_close($conn); ?>
</body>

</html>