<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
$userid = $_POST['userid'];

//now create connection
$con = mysqli_connect("localhost","root","","smcproject");

//create query to insert data
$qry = "UPDATE users SET name='$name',phone='$phone',address='$address',email='$email' WHERE id = $userid";

//run query
$result = mysqli_query($con,$qry);

if($result)
{
    echo "<script>
    alert('User Updated Successfully');
    window.location.href='allusers.php';
    </script>";
}
else
{
    echo "Unable to Store Data";
}
?>