<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "smcproject";

//create connection
$con = mysqli_connect($server,$username,$password,$database);

//check connection
if($con)
{
    echo "Connection Successful";
}

?>