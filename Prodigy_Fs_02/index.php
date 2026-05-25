<?php

include "db.php";
if(isset($_POST['submit'])){

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $department = trim($_POST['department']);
    $salary = trim($_POST['salary']);

    if(empty($name) || empty($email) ||
    empty($department) || empty($salary)){

        echo "All fields are required";

    }
    else{

        $sql = "INSERT INTO employees(name, email, department, salary)
                VALUES('$name', '$email', '$department', '$salary')";

        mysqli_query($conn, $sql);

    }

    $sql = "INSERT INTO employees(name, email, department, salary)
            VALUES('$name', '$email', '$department', '$salary')";

    mysqli_query($conn, $sql);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Employee Management System</h1>
    <a href="logout.php">
        <button>Logout</button>
    </a>

    <br><br>

<form method="POST">

    <input type="text" name="name" placeholder="Enter Employee Name" required>

    <br><br>

    <input type="email" name="email" placeholder="Enter Employee Email" required>

    <br><br>

    <input type="text" name="department" placeholder="Enter Department" required>

    <br><br>

    <input type="number" name="salary" placeholder="Enter Salary" min="1" required>

    <br><br>

    <button type="submit" name="submit">Add Employee</button>

</form>
<br><br>

<table border="1" align="center">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Department</th>
        <th>Salary</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
<?php

$sql = "SELECT * FROM employees";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

    <td><?php echo $row['id']; ?></td>

    <td><?php echo $row['name']; ?></td>

    <td><?php echo $row['email']; ?></td>

    <td><?php echo $row['department']; ?></td>

    <td><?php echo $row['salary']; ?></td>

    <td>
        <a href="delete.php?id=<?php echo $row['id']; ?>">
            Delete
        </a>
    </td>

    <td>
        <a href="update.php?id=<?php echo $row['id']; ?>">
            Update
        </a>
    </td>

</tr>

<?php

}

?>
</table>

</body>
</html>