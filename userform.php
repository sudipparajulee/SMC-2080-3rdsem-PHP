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

            form input{
                display: block;
                width: 95%;
                padding: 20px;
                margin: 10px;
                border: 1px solid blue;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <form action="register.php" method="POST">
            <h1>Register</h1>
            <input type="text" placeholder="Enter Name" name="name">
            <input type="text" placeholder="Enter Phone" name="phone">
            <input type="text" placeholder="Enter Address" name="address">
            <input type="email" placeholder="Enter Email Address" name="email">

            <input type="submit" value="Register">
        </form>
    </body>
</html>