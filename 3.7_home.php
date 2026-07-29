<?php
session_start();

if(empty($_SESSION['user']))
{
    header("Location:3.7_login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>

<h2>Home Page</h2>

Welcome <?php echo $_SESSION['user']; ?>

<br><br>

<a href="3.7_logout.php">Logout</a>

</body>
</html>