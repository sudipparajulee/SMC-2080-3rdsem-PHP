<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];

$filename = time().'_'.$_FILES['photo']['name'];
$tmpname = $_FILES['photo']['tmp_name'];
//move to folder
move_uploaded_file($tmpname,"userimages/".$filename);


//now create connection
$con = mysqli_connect("localhost","root","","smcproject");

//create query to insert data
$qry = "INSERT INTO users (name,phone,address,email,photo) VALUES ('$name','$phone','$address','$email','$filename')";

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