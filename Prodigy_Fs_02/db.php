<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "employee_db";
$conn = mysqli_connect($host, $user, $password, $database);
if(!$conn){
    die("Failed to connect");
}
?>