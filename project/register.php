<?php include 'includes/header.php'; ?>

<form action="" method="POST" class="register-form">
    <h1>Register</h1>
    <input type="text" name="name" placeholder="Full Name">
    <input type="email" name="email" placeholder="Email Address">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="cpassword" placeholder="Confirm Password">
    <input type="submit" name="submit" value="Register"> 
</form>
<center>Already have login? <a href="login.php">Login Here</a></center>

<?php include 'includes/footer.php'; ?>

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if($password == $cpassword)
    {
        $qry = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', md5($password))";
        include 'includes/db.php';
        if(mysqli_query($con, $qry))
        {
            echo '<script type="text/javascript"> alert("User Registered"); window.href.location = "login.php"; </script>';
        }
        else
        {
            echo '<script type="text/javascript"> alert("Error!") </script>';
        }
    }
    else
    {
        echo '<script type="text/javascript"> alert("Password and Confirm Password does not match!"); window.href.location = "register.php"; </script>';
    }
}

?>