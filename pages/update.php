<?php
require '../classes/User.class.php';

$user = new user($_SESSION['username'], $_SESSION['password'], $_SESSION['email']);

if (!isset($_SESSION['username'])) {
    header('location:../index.php');
}
else{

    $newUsername = $_POST['username'];
    $newPassword = $_POST['password'];
    $newEmail = $_POST['email'];

    echo $newUsername;
    echo $newPassword;
    echo $newEmail;

    var_dump( $user->test());

    $user->updateDB('username', $newUsername);
    $user->updateDB('email', $newEmail);
    $user->updateDB('password', $newPassword);

//    $user->update($newUsername, $newPassword, $newEmail);
}


