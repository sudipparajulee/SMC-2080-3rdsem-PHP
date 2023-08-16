<?php
$userid = $_GET['userid'];

//create connection
$con = mysqli_connect('localhost','root','','smcproject');

//query
$qry = "DELETE FROM users WHERE id = $userid";

//execute query
$result = mysqli_query($con,$qry);

if($result)
{
    echo "<script>
    alert('User Deleted Successfully');
    window.location.href='allusers.php';
    </script>";
}
else
{
    echo "Unable to Delete User";
}
?>