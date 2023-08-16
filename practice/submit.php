<?php
$uname = $_POST['username'];
$pass = $_POST['password'];
// echo $uname;
// echo $pass;

if($uname == "admin" && $pass == "1234")
{
    echo "Login Successful";
}
else
{
    echo "Invalid Login Details";
}
?>