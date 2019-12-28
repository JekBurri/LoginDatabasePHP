<?php include('loginScript.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User registration system using PHP and MYSQL</title>
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form method="post" action="login.php">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <p>
            Don't have an account? <a href="register.php">Sign up</a>
        </p>

    </form>
</body>
</html>