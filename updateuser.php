<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
$userid = $_POST['userid'];

//get current data
$qry = "SELECT * FROM users WHERE id = $userid";
$result = mysqli_query($con,$qry);
$data = mysqli_fetch_assoc($result);
$filename = $data['photo'];
if($_FILES['photo']['name'] != "")
{
$filename = time().'_'.$_FILES['photo']['name'];
$tmpname = $_FILES['photo']['tmp_name'];
//move to folder
move_uploaded_file($tmpname,"userimages/".$filename);
//delete old photo
unlink("userimages/".$data['photo']);
}

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