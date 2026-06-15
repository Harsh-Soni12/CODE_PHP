<?php
session_start();

$_SESSION["userid"] = $_POST["userid"];
$_SESSION["password"] = $_POST["password"];

echo "Registration Successful!<br><br>";
echo "<a href='login.php'>Go to Login</a>";
?>