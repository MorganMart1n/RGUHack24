<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Core29</title>
    <link rel="stylesheet" href="public/css/main.css"/>
    <link rel="icon" type="image" href="public/images/favicon-128x128.png">
</head>
<body>
<div class="loginHero">
    <div class="loginLogo">
        <img src="public/images/core29-logo-white.png" alt="Logo"/>
    </div>
</div>
<div class="login">
    <div class="loginForm">
        <form method="post" action="login.php"> <!-- assuming login.php is your login processing script -->
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
