<?php
require '../classes/User.class.php';
session_start();


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$user=new user($username, $password, $email);
$_SESSION['user'] = $user;

$user->check_login();
