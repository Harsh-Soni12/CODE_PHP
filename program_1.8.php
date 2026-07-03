<!DOCTYPE html>
<html>
<head>
    <title>Reverse Array</title>
</head>
<body>

<form method="post">
    Enter values (separated by commas):<br><br>
    <input type="text" name="arr" required>
    <br><br>
    <input type="submit" value="Reverse">
</form>

<?php
if(isset($_POST["arr"]))
{
    $arr = explode(",", $_POST["arr"]);

    echo "<br>Original Array:<br>";
    print_r($arr);

    $rev = array_reverse($arr);

    echo "<br><br>Reversed Array:<br>";
    print_r($rev);
}
?>

</body>
</html>