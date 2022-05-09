<?php
session_start();

if (isset($_SESSION['user'])){
    header('location:pages/home.php');
} else {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <div class="login_content">
        <h1>Please, login</h1>
        <form action="pages/login.php" name="login" method="post">
            <input type="text" name="username" placeholder="username">
            <input type="email" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>
 <?php
}
?>