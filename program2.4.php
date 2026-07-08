<?php

$str = "Harsh Vaya";

echo "String = " . $str . "<br><br>";

echo "Length = " . strlen($str) . "<br>";

echo "Position of Vaya = " . strpos($str, "Vaya") . "<br>";

echo "Word Count = " . str_word_count($str) . "<br>";

echo "Reverse = " . strrev($str) . "<br>";

echo "Lowercase = " . strtolower($str) . "<br>";

echo "Uppercase = " . strtoupper($str);

?>