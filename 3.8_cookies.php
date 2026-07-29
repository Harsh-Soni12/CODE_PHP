<?php

if(empty($_COOKIE["visitor"]))
{
    setcookie("visitor","Yes",time()+86400);

    echo "Welcome! You are a New User.";
}
else
{
    echo "Welcome Back! You are a Repeated User.";
}

?>