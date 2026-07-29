<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="post">

Name :
<input type="text" name="name" required>
<br><br>

Email :
<input type="email" name="email" required>
<br><br>

Password :
<input type="password" name="password" required>
<br><br>

<input type="submit" value="Register">

</form>

</body>
</html>

<?php
include "db.php";

if($_POST)
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO registration(name,email,password)
            VALUES('$name','$email','$password')";

    if(mysqli_query($conn,$sql))
    {
        echo "Record Inserted Successfully";
    }
    else
    {
        echo "Error";
    }
}
?>