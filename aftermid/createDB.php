<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername,$username,$password);


    if($conn ->connect_error){
        die("Connection failed".$conn->connect_error);
    }

    $sql = "CREATE DATABASE myDB";
    if(mysqli_query($conn,$sql)){
        echo 'database create seccessfully';
    }
    else{
        echo 'error creating database:'. mysqli_error($conn);
    }
    mysqli_close($conn);
?>