<?php
require 'classes/HTML.class.php';
require 'classes/User.class.php';
session_start();


$html = new html();
//if (isset($_SESSION['user'])){
//    header('location:pages/home.php');
//} else {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= $html->style('styles/style.css') ?>
    <title>Login</title>
</head>
<body>
<!--    <div class="login_content">-->
<!--        <h1>Please, login</h1>-->
<!--        <form action="pages/login.php" name="login" method="post">-->
<!--            <input type="text" name="username" placeholder="username">-->
<!--            <input type="email" name="email" placeholder="email">-->
<!--            <input type="password" name="password" placeholder="password">-->
<!--            <input type="submit" name="submit" value="Submit">-->
<!--        </form>-->
<!--    </div>-->
<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">

    <div class="signup">
        <form name="signup" action="pages/signup.php" method="post">
            <label for="chk" aria-hidden="true">Sign up</label>
            <input type="text" name="username" placeholder="Username"
                   required="">
            <input type="email" name="email" placeholder="Email" required="">
            <input type="password" name="password" placeholder="Password"
                   required="">
            <button>Sign up</button>
        </form>
    </div>

    <div class="login">
        <form name="login" action="pages/login.php" method="post">
            <label for="chk" aria-hidden="true">Login</label>
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button>Login</button>
        </form>
    </div>
</div>
</body>
</html>

 <?php
//}
?>