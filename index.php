<?php
include 'classes/HTML.class.php';
require 'classes/User.class.php';


$html = new html();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= $html->style('styles/login.style.css') ?>
    <title>Login</title>
</head>
<body>

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