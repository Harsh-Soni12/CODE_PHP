<?php
// 1.2 Write a PHP program to find out maximum and minimum number.
$num1 = 25;
$num2 = 40;

if ($num1 > $num2) {
    $max = $num1;
    $min = $num2;
} else {
    $max = $num2;
    $min = $num1;
}

echo "Maximum Number = " . $max . "<br>";
echo "Minimum Number = " . $min;
?>