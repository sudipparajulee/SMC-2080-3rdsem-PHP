<html>
    <head>
        <title>Login Form</title>
        <style>
            input
            {
                display: block;
                margin: 10px;
                padding: 10px;
            }

            input[type=submit]
            {
                background-color: blue;
                color: white;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <form action="submit.php" method="POST">
            <input type="text" placeholder="Enter Username" name="username">
            <input type="password" placeholder="Enter Password" name="password">

            <input type="submit" value="Login">
        </form>
    </body>
</html>