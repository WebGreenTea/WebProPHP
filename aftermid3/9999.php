<?php
$hostname = "localhost";
$username = "root";
$password = "12345";
$dbname = "itbook";
$connect = new mysqli($hostname, $username, $password, $dbname);
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
mysqli_set_charset($connect,'utf8');
$sql = "SELECT * FROM book";
$result = $connect->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Menu</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>แสดงข้อมูลหนังสือ</h1>
        <table>
            <thead>
                <tr>
                    <td width="5%">#</td>
                    <td width="25%">BookName</td>
                    <td width="25%">ราคา (บาท) </td>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['BookID']; ?></td>
                        <td class="name">
                            <?php echo $row['BookName']; ?>
                        </td>

                        <td><?php echo $row['UnitPrice']; ?></td>

                    </tr>

                    0 6 0 2 4 3 1 1 3 W E B P R O G R A M M I N G 199
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</body>

</html>