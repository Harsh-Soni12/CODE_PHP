<!DOCTYPE html>
<html>
<head>
    <title>Create Cookie</title>
</head>
<body>

<form method="post">
    Username:
    <input type="text" name="username"><br><br>

    Password:
    <input type="password" name="password"><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    setcookie("username", $username, time()+3600, "/");
    

    echo "<br>Cookies Created Successfully.";
}
?>