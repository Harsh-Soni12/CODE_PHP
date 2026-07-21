<!DOCTYPE html>
<html>
<head>
    <title>Customer Records</title>
</head>
<body>

<h2>Customer Records</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

<?php

include "db.php";

$sql = "SELECT * FROM sign_up";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
        </tr>
        <?php
    }
}
else
{
    ?>
    <tr>
        <td colspan="3">No Record Found</td>
    </tr>
    <?php
}

?>

</table>

</body>
</html>