<?php session_start(); ?>
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
            <p><?php echo $_SESSION['mysession']; ?></p>
            <ul class="menu">
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="category.php">Categories</a></li>
                <li><a href="">News</a></li>
                <li><a href="">Ads</a></li>
                <li><a href="">Logout</a></li>
            </ul>
        </div>

        <div class="content">
            <!-- Content Here  -->
        