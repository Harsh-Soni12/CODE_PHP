<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">

Username :
<input type="text" name="usename" required>

<br><br>

Password :
<input type="password" name="password" required>

<br><br>

<input type="submit" name="login" value="Login">

</form>

<br>

<a href="update.php">Update Password</a>

</body>
</html>

<?php
include 'db.php';

if($_POST)
{
    $usename = $_POST['usename'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login
            WHERE usename='$usename'
            AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
    {
        echo "<h3>Login Successful</h3>";
    }
    else
    {
        echo "<h3>Invalid Username or Password</h3>";
    }
}