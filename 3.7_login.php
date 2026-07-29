<?php
session_start();

if($_POST)
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['user'] = $username;

    header("Location:3.7_home.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">

Username :
<input type="text" name="username" required>
<br><br>

Password :
<input type="password" name="password" required>
<br><br>

<input type="submit" value="Login">

</form>

</body>
</html>