<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "12345";
    $dbname = "itbook";
    $conn = new mysqli($hostname, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_set_charset($conn, 'utf8');
    $sql = "SELECT book.BookID as ID ,book.BookName as BookName,typebook.TypeName as TypeName FROM book INNER JOIN typebook ON book.TypeID = typebook.TypeID";
    //$sql = "SELECT book.BookID as ID,book.BookName as BookName,typebook.TypeName as TypeName FROM book INNER JOIN typebook ON book.TypeID = ";
    $result = $conn->query($sql);
    ?>
    <?php if ($result->num_rows > 0) : ?>
        <div class="container">
        <h1>แสดงข้อมูลหนังสือ</h1>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <table>
                <thead>
                    <tr>
                        <td width="5%">ID</td>
                        <td width="25%">BookName</td>
                        <td width="25%">ประเภท</td>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <td><?php echo $row['ID']; ?></td>
                            <td class="name">
                                <?php echo $row['BookName']; ?>
                            </td>

                            <td><?php echo $row['TypeName']; ?></td>

                        </tr>


                    <?php endwhile ?>
                </tbody>
            </table>
        <?php } ?>
        </div>
        
    <?php else : ?>
        <?php echo "0 results" ?>
    <?php endif ?>
    <?php $conn->close() ?>

    
</body>

</html>