<?php
session_start();
require '../classes/User.class.php';

$user = new user($_SESSION['username'],$_SESSION['email'], $_SESSION['password']);

$user->deleteAccount();
var_dump($_SESSION['email']);