<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>

<h2>Forgot Password</h2>

<form method="post">

Username :
<input type="text" name="usename" required>

<br><br>

New Password :
<input type="password" name="password" required>

<br><br>

Confirm Password :
<input type="password" name="confirm_password" required>

<br><br>

<input type="submit" name="submit" value="Update Password">

</form>

<br>

<a href="login_update.php">Back to Login</a>

</body>
</html>

<?php
include 'db.php';

if($_POST)
{
    $usename = $_POST['usename'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    if($password == $confirm)
    {
        $sql = "UPDATE login
                SET password='$password'
                WHERE usename='$usename'";

        if(mysqli_query($conn, $sql))
        {
            if(mysqli_affected_rows($conn) > 0)
            {
                echo "<h3>Password Updated Successfully</h3>";
            }
            else
            {
                echo "<h3>Username Not Found</h3>";
            }
        }
        else
        {
            echo "<h3>Update Failed</h3>";
        }
    }
    else
    {
        echo "<h3>Password Does Not Match</h3>";
    }
}