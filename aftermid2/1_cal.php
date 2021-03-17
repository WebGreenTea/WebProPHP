<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = $_GET['dbName'];
$tableName = $_GET['tablename'];
$name = $_GET['name'];
$last = $_GET['last'];
$email = $_GET['email'];
/*$conn = mysqli_connect($servername, $username, $password);
$sql = "CREATE DATABASE $dbname";
if (mysqli_query($conn, $sql)) {
    echo "Database $dbname created successfully<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn)."<br>";
}
mysqli_close($conn);
*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// sql to create table
$sql = "CREATE TABLE $tableName (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table $tableName created successfully<br>";
} 
$sql = "INSERT INTO $tableName (firstname,lastname,email) VALUES ('$name','$last','$email')";
//mysqli_query($conn,$sql);
if ($conn->query($sql) === TRUE) {
    echo "Insert Data successfully";
}
$conn->close();
?>