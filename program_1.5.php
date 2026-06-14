<?php
//1.5 Write a PHP program to print 5 to 10 using For and For Each. 

echo "<h3>Using For Loop</h3>";

for($i = 5; $i <= 10; $i++)
{
    echo $i . "<br>";
}

echo "<h3>Using For Each Loop</h3>";

$no = array(5, 6, 7, 8, 9, 10);

foreach($no as $n)
{
    echo $n . "<br>";
}

?>