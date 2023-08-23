<?php include 'includes/header.php'; ?>

<form action="" class="login-form" method="POST">
    <h1>Login</h1>
    <input type="email" name="email" placeholder="Email Address">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Login">
</form>
<center>Don't have login? <a href="register.php">Register Here</a></center>

<?php include 'includes/footer.php'; ?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $qry = "SELECT * FROM users WHERE email = '$email' AND password = md5('$password')";
    include 'includes/db.php';
    $result = mysqli_query($con, $qry);
    if(mysqli_num_rows($result) == 1)
    {
        echo "Congratulation";
        // header('location: index.php');
    }
    else
    {
        echo '<script type="text/javascript"> alert("Invalid Credentials"); window.href.location = "login.php"; </script>';
    }
}
?>