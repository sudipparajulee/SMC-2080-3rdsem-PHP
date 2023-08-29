<?php session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != "Yes")
{
    header('location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="admin-container">
        <div class="nav">
            <img src="../images/logo.png" alt="">
            <ul class="menu">
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="category.php">Categories</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="">Ads</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <div class="content">
            <!-- Content Here  -->
        