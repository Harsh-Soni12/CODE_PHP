<!DOCTYPE html>
<html>
<head>
    <title>Remember Login</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">

Username :
<input type="text" name="username" value="<?php echo $username; ?>">
<br><br>

Password :
<input type="password" name="password" value="<?php echo $password; ?>">
<br><br>

<input type="submit" value="Login">

</form>

</body>
</html>

<?php

$username = "";
$password = "";

if(!empty($_COOKIE["username"]))
{
    $username = $_COOKIE["username"];
}

if(!empty($_COOKIE["password"]))
{
    $password = $_COOKIE["password"];
}

if($_POST)
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    setcookie("username", $username, time()+86400);
    setcookie("password", $password, time()+86400);

    header("Location: 3.9_login.php");
    exit();
}
?>