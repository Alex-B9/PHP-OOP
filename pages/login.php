<?php
//session_start();

require '../classes/User.class.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$user=new User($username, $email, $password);

$user->check_login();
//var_dump($user->check_login());

//var_dump( $user->check_login($username, $password));

//var_dump($user->username);

//if ($user->check_login() == 'successfully co') {
//    header('location:../patrick.php');
//}
//elseif ($user->check_login() == 'wrong password and/or username'){
//    header('location:../index.php');
//}

//if ($user->check_login() == header('location:../patrick.php') ){
//    header('location:../patrick.php');
//}
//elseif($user->check_login() == header('location:../index.php')){
//    header('location:../index.php');
//}
?>

<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<p>bla bla bla bla bla bla</p>-->
<!--</body>-->
<!--</html>-->
