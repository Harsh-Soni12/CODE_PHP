<?php
// Delete the cookie
setcookie("username", "", time() - 86400);

echo "Cookie Deleted Successfully";
?>