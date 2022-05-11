<?php
//include_once 'classes/User.class.php';
session_start();

if (!isset($_SESSION['username']) OR !isset($_SESSION['password'])){
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
    <title>Home</title>
</head>
<body>
    <div class="container">
        <h1>Welcome <?= $_SESSION['username']?>.</h1>

    </div>
<div class="nav">
    <button><a href="../pages/PersonalPage.php">Personal page</a></button>
    <button><a href="../pages/exercises.php">Exercises 1 & 2</a></button>
</div>
</body>
</html>

<?php

}
