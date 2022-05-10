<?php
require '../classes/User.class.php';
session_start();

$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$email = htmlspecialchars($_POST['email']);

$User = new user($username, $password, $email);

$User->signup( $username,$email, $password);
