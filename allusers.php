<?php
//create connection
$con = mysqli_connect("localhost","root","","smcproject");

//query
$qry = "SELECT * FROM users";

//execute query
$result = mysqli_query($con,$qry);
?>
<html>
    <head>
        <title>All Users</title>
        <style>
            h2{
                text-align: center;
            }
            table{
                border-collapse: collapse;
                width: 800px;
                margin: auto;
                background-color: #ffbbaa;
            }
            td,th{
                border: 1px solid black;
                text-align: center;
                padding: 10px;
            }
            .create-btn{
                text-align: right;
                margin-right: 150px;
            }
            .create-btn a{
                background-color: red;
                color: white;
                padding: 10px;
                text-decoration: none;
                border-radius: 5px;
            }
            .edit-btn{
                background-color: blue;
                color: white;
                padding: 5px;
                text-decoration: none;
                border-radius: 5px;
            }
            .delete-btn{
                background-color: red;
                color: white;
                padding: 5px;
                text-decoration: none;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <h2>Our Users</h2>
        <div class="create-btn">
            <a href="createuser.php">Create New User</a>
        </div>
        <table>
            <tr>
                <th>S.N.</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
            $i =1;
            while($row = mysqli_fetch_assoc($result))
            {
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                    <a href="edituser.php?userid=<?php echo $row['id']; ?>" class="edit-btn">Edit</a>
                    <a href="" class="delete-btn">Delete</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </body>
</html>