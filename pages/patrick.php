<?php
//include_once 'classes/User.class.php';
session_start();

//echo $_SESSION['user']->
var_dump($_SESSION['user']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <h1>Welcome to Patrick.</h1>
    </div>
<div class="nav">
    <button><a href="../pages/PersonalPage.php">Personal page</a></button>
</div>
</body>
</html>