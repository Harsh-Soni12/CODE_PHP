<?php
session_start();

session_destroy();

header("Location:3.7_login.php");
exit();
?>