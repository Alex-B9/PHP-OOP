<?php
session_start();

if (!isset($_SESSION['username'])){
    header('location:../index.php');
}else{

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/home.style.css">
    <title>Personal Page</title>
</head>
<body>
<div class="main">
    <div class="bloc_content">
        <form action="../pages/update.php" method="post" name="profile">
            <div>
                <label for="username">Username</label>
                <input type="text" placeholder="Username"
                       name="username" value="<?=$_SESSION['username']?>">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email"
                       value="<?=$_SESSION['email']?>">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password"
                       value="<?=$_SESSION['password']?>">
            </div>
            <div>
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
        <form action="../pages/logout.php" name="logout" method="post">
            <input type="submit" name="subLogout" value="Logout">
        </form>
        <form action="../pages/DeleteAccount.php" name="deleteAccount" method="post">
            <input type="submit" name="deleteAccount" value="Delete account">
        </form>
    </div>
</div>
</body>
</html>

<?php
}
