<?php
require '../classes/User.class.php';
session_start();


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$user=new user($username, $email, $password);
$_SESSION['user'] = $user;
$_SESSION['user']->check_login();
//$user->check_login();

//$test = $_SESSION['user'];