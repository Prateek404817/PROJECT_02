<?php
include "db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM employees WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if(isset($_POST['update'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];

    $sql = "UPDATE employees SET
            name='$name',
            email='$email',
            department='$department',
            salary='$salary'
            WHERE id=$id";

    mysqli_query($conn, $sql);

    header("Location: index.php");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Update Employee</h1>
    <form method="POST">

        <input type="text" name="name"
        value="<?php echo $row['name']; ?>">

        <br><br>

        <input type="email" name="email"
        value="<?php echo $row['email']; ?>">

        <br><br>

        <input type="text" name="department"
        value="<?php echo $row['department']; ?>">

        <br><br>

        <input type="number" name="salary"
        value="<?php echo $row['salary']; ?>">

        <br><br>

        <button type="submit" name="update">
            Update Employee
        </button>

    </form>
</body>
</html>