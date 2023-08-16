<?php
$userid = $_GET['userid'];
//create connection
$con = mysqli_connect('localhost','root','','smcproject');

//query
$qry = "SELECT * FROM users WHERE id = $userid";

//execute query
$result = mysqli_query($con,$qry);

//fetch data
$data = mysqli_fetch_assoc($result);

//close connection
mysqli_close($con);
?>
<html>
    <head>
        <title>User Register</title>
        <style>
            form{
                width: 50%;
                background-color: aqua;
                padding: 10px;
                margin: 10% auto;
                border-radius: 15px;
            }

            h1{
                text-align: center;
            }

            form > input{
                display: block;
                width: 95%;
                padding: 20px;
                margin: 10px;
                border: 1px solid blue;
                border-radius: 10px;
            }
            .form-footer{
                display: flex;
                justify-content: center;
            }
            .form-footer input , .form-footer a{
                background-color: blue;
                color: white;
                cursor: pointer;
                padding: 10px;
                text-decoration: none;
                border-radius: 5px;
                margin: 10px;
            }
        </style>
    </head>
    <body>
        <form action="updateuser.php" method="POST" enctype="multipart/form-data">
            <h1>Edit User</h1>
            <input type="hidden" value="<?php echo $data['id']; ?>" name="userid">
            <input type="text" value="<?php echo $data['name']; ?>" placeholder="Enter Name" name="name">
            <input type="text" value="<?php echo $data['phone']; ?>" placeholder="Enter Phone" name="phone">
            <input type="text" value="<?php echo $data['address']; ?>" placeholder="Enter Address" name="address">
            <input type="email" value="<?php echo $data['email']; ?>" placeholder="Enter Email Address" name="email">
            <input type="file" name="photo">
            <p>
                Current Photo: <br>
                <img src="userimages/<?php echo $data['photo']; ?>" width="100px">
            </p>

            <div class="form-footer">
                <input type="submit" value="Update">
                <a href="allusers.php">Exit</a>
            </div>
        </form>
    </body>
</html>