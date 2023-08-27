<?php
include '../includes/db.php'; 

if(isset($_POST['create']))
{
    $priority = $_POST['priority'];
    $name = $_POST['name'];

    $query = "INSERT INTO categories(priority, name) VALUES('$priority', '$name')";
    $result = mysqli_query($con, $query);

    if($result)
    {
        echo "<script>alert('Category Created Successfully'); 
        window.location.href='category.php';</script>";
    }
    else
    {
        echo "Error on creating category";
    }
}

?>