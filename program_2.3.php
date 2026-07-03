<?php

$a = array("Name"=>"Harsh","City"=>"Rajkot");
echo "1. array_change_key_case()<br>";
print_r(array_change_key_case($a, CASE_LOWER));

echo "<br><br>";

$b = array("A","B","A","C","A");
echo "2. array_count_values()<br>";
print_r(array_count_values($b));

echo "<br><br>";

$c = array("Apple","Banana","Mango");
array_pop($c);
echo "3. array_pop()<br>";
print_r($c);

echo "<br><br>";

$d = array("Apple","Banana");
array_push($d,"Mango");
echo "4. array_push()<br>";
print_r($d);

echo "<br><br>";

$e = array(5,2,8,1,3);
sort($e);
echo "5. sort()<br>";
print_r($e);

?>