<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select </title>
</head>
<body>
    
</body>
</html>

<?php
include 'db.php';
$sel = "select * from product";
$result = mysqli_query($conn,$sel);
if($result -> num_rows>0){
    while ($row = $result -> fetch_assoc()){
        echo $row['product_name']." ".$row['product_price']."<br>";
    }
}

?>