<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Example</title>
    <style>
        .mytable{
            border-collapse: collapse;
        }
        .mytable th, .mytable td{
            border: 1px solid black;
            padding: 10px;
        }
        .mytable th{
            background-color: #ccc;
        }
        .mytable tr:nth-child(odd){
            background-color: #eee;
        }
        .mytable tr:nth-child(even){
            background-color: #fff;
        }
        .editbtn{
            background-color: blue;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 10px;
        }
        .deletebtn{
            background-color: red;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <table class="mytable">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>25</td>
            <td><a href="" class="editbtn">Edit</a> <a href="" class="deletebtn">Delete</a></td>
        </tr>
        <tr>
            <td>Jane</td>
            <td>Doe</td>
            <td>23</td>
            <td><a href="" class="editbtn">Edit</a> <a href="" class="deletebtn">Delete</a></td>
        </tr>
        <tr>
            <td>Mark</td>
            <td>Smith</td>
            <td>30</td>
            <td><a href="" class="editbtn">Edit</a> <a href="" class="deletebtn">Delete</a></td>
        </tr>

    </table>
</body>
</html>