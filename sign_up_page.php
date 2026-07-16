<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>

<h2>Sign Up Form</h2>

<form method="post">

Name :
<input type="text" name="name" required>
<br><br>

Password :
<input type="password" name="password" required>
<br><br>

Confirm Password :
<input type="password" name="confirm" required>
<br><br>

Email :
<input type="email" name="email" required>
<br><br>

Phone :
<input type="text" name="phone"  required>
<br><br>

<input type="submit" name="signup" value="Sign Up">

</form>

</body>
</html>

<?php

$conn = mysqli_connect("localhost","root","sgmh3797@dx","user");

if(!$conn)
{
    die("Connection Failed : " . mysqli_connect_error());
}

if(isset($_POST['signup']))
{
    $name = $_POST['name'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if($password != $confirm)
    {
        echo "Password Does Not Match";
    }
    else
    {
        $sql = "INSERT INTO sign_up(name,password,email,phone)
                VALUES('$name','$password','$email','$phone')";

        if(mysqli_query($conn,$sql))
        {
            echo "Registration Successful";
        }
        else
        {
            echo "Error : " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);

?>