<?php
include 'db.php';

$sql = "DELETE FROM login WHERE usename='root'";
$sql = "DELETE FROM login WHERE password='1234'";

if(mysqli_query($conn, $sql))
{
    echo "Record Deleted Successfully";
}
else
{
    echo "Delete Failed";
}
?>