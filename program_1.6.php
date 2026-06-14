<?php
//1.6 Write a PHP program to print 15 to 20 using While and Do While.

echo "<h3>Using While Loop</h3>";

$i = 15;

while($i <= 20)
{
    echo $i . "<br>";
    $i++;
}

echo "<h3>Using Do While Loop</h3>";

$j = 15;

do
{
    echo $j . "<br>";
    $j++;
}
while($j <= 20);

?>