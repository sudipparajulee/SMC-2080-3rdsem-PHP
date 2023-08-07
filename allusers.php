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
                width: 600px;
                margin: auto;
                background-color: #ffbbaa;
            }
            td,th{
                border: 1px solid black;
                text-align: center;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <h2>Our Users</h2>
        <table>
            <tr>
                <th>S.N.</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Email</th>
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
            </tr>
            <?php
            }
            ?>
        </table>
    </body>
</html>