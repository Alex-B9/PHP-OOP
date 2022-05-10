<?php
session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Page</title>
</head>
<body>
<div class="container">
    <div class="bloc_content">
        <form action="../pages/update.php" method="post" name="profile">
            <div>
                <label for="username">Username</label>
                <input type="text" placeholder="Username">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" placeholder="Email">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" placeholder="Password">
            </div>
            <div>
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
</div>
</body>
</html>
