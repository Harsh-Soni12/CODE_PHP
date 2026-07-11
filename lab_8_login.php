<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">
    Username:
    <input type="text" name="username" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    <input type="submit" name="login" value="Login">
</form>

<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO `login` (`usename`, `password`)
            VALUES ('$user', '$pass')";

    mysqli_query($conn, $sql);
}

$sql = "SELECT `usename`, `password` FROM `login` WHERE 1";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "Username: " . $row['usename'] . "<br>";
    echo "Password: " . $row['password'] . "<br><br>";
}

?>

</body>
</html>