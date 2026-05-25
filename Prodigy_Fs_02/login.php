<?php

include "db.php";
if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM admin
            WHERE username='$username'
            AND password='$password'";

    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){

        header("Location: index.php");

    } else {

        echo "Invalid Username or Password";

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prateek-Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Admin Login</h1>
    <form method="POST">

        <input type="text" name="username"
        placeholder="Enter Username">

        <br><br>

        <input type="password" name="password"
        placeholder="Enter Password">

        <br><br>

        <button type="submit" name="login">
            Login
        </button>

    </form>
</body>
</html>