<?php
echo "Current Date: " . date("Y-m-d") . "<br><br>";

echo "1. DAYOFWEEK(): " . date("w") . "<br>";
echo "2. WEEKDAY(): " . (date("N") - 1) . "<br>";
echo "3. DAYOFMONTH(): " . date("d") . "<br>";
echo "4. DAYOFYEAR(): " . date("z") + 1 . "<br>";
echo "5. DAYNAME(): " . date("l") . "<br>";
?>