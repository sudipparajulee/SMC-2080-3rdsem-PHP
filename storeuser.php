<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];

//now create connection
$con = mysqli_connect("localhost","root","","smcproject");

//create query to insert data
$qry = "INSERT INTO users (name,phone,address,email) VALUES ('$name','$phone','$address','$email')";

//run query
$result = mysqli_query($con,$qry);

if($result)
{
    echo "<script>
    alert('User Created Successfully');
    window.location.href='allusers.php';
    </script>";
}
else
{
    echo "Unable to Store Data";
}
?>