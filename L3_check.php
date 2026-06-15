<?php
session_start();

if($_POST["userid"] == $_SESSION["userid"] &&
   $_POST["password"] == $_SESSION["password"])
{
    header("Location: welcome.php");
}
else
{
    echo "Invalid User ID or Password";
}
?>