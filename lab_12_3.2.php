<!DOCTYPE html>
<html>
<head>
    <title>Read Cookie</title>
</head>
<body>

<form method="post">
    <input type="submit" name="submit" value="Read Cookie">
</form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    echo "Username: " . $_COOKIE["username"] . "<br>";

}
?>