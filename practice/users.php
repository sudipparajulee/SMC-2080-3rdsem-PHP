<?php
//indexed array
// $arr = array('Ram','Shyam');

//associative array
// $assoc = array('BCA' => 35, 'BIM' => 45);

// echo $assoc['BCA'];
//create connection
$con = mysqli_connect('localhost','root','','smcproject');

if(!$con)
{
    die('Connection Error');
}

$qry = "SELECT * FROM users";

$result = mysqli_query($con,$qry);


?>

<html>
    <head>
        <title>Users</title>
        <style>
            h2{
                text-align: center;
            }

            table{
                width: 600px;
                background-color: wheat;
                margin: auto;
                border-collapse: collapse;
            }

            th,td{
                border: 1px solid black;
                text-align: center;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <h2>Our Students</h2>
        <table>
            <tr>
                <th>S.N.</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Email</th>
            </tr>
            
            <?php
            $i = 1;
            while($row = mysqli_fetch_assoc($result))
            {

            ?>
            <tr>
                <td><?php echo $i++;?></td>
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