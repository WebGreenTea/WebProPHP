<?php
$dbname = $_GET['dbName'];
$servername = "localhost";
$username = "root";
$password = "12345";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Create database
$sql = "DROP DATABASE $dbname";
if (mysqli_query($conn, $sql)) {
    echo "Database delete successfully";
} else {
    echo "Error delete database: " . mysqli_error($conn);
}
$sql = "SHOW DATABASES";
$result =  mysqli_query($conn, $sql);
echo '<br>';
while($row = mysqli_fetch_row($result)){
    echo $row[0].'<br>';
}

mysqli_close($conn);
?>