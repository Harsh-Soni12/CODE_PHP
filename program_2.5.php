<!DOCTYPE html>
<html>
<body>

<form method="post">

Number 1:
<input type="number" name="num1" required>
<br><br>

Number 2:
<input type="number" name="num2" required>
<br><br>

<input type="radio" name="op" value="+" required> +
<input type="radio" name="op" value="-"> -
<input type="radio" name="op" value="*"> *
<input type="radio" name="op" value="/"> /
<br><br>

<input type="submit" value="Calculate">

</form>

<?php

function calculator($a, $b, $op)
{
    if($op == "+")
        return $a + $b;
    elseif($op == "-")
        return $a - $b;
    elseif($op == "*")
        return $a * $b;
    elseif($op == "/")
        return $a / $b;
}

if(isset($_POST["num1"]))
{
    $a = $_POST["num1"];
    $b = $_POST["num2"];
    $op = $_POST["op"];

    echo "<br>Answer = " . calculator($a, $b, $op);
}

?>

</body>
</html>