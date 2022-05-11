<?php
require '../classes/User.class.php';
session_start();

$user = new user($_SESSION['username'], $_SESSION['password'], $_SESSION['email']);

$user->logout();