<?php 
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION['level']);
header('location: login.php');
?>