<?php

$host = "localhost";
$username = "root";
$password = "sgmh3797@dx";
$database = "user";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>