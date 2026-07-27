<!DOCTYPE html>
<html>
<head>
    <title>Cookie with Header</title>
</head>
<body>

<h2>Login Form</h2>

    <form method="POST">
        Username:
        <input type="text" name="username"><br><br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST["username"];

    // Set Cookie
    setcookie("Username", $name, time()+86400, "/");

    // Redirect to another page
    header("Location: welcome.php");
}

?>