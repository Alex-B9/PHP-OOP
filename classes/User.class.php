<?php
require_once('DataBaseConnection.class.php');
session_start();

class user {
    public $username;
    public $password;
    public $email;
//    public $status;
    public $bdd;

    public function __construct($username, $password, $email){
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->bdd = new DataBaseConnexion('becode', 'root', '');
    }


    public function signup($username, $password, $email){

            if ($this->getUser($email) == false){

                $sql = "INSERT INTO accounts (username, password, email) VALUES( :username, :password, :email)";
                $query = $this->bdd->DataBaseConnexion()->prepare($sql);
                $query->execute(array(
                    'username' => $username,
                    'password'=>$password,
                    'email' =>$email
                ));
//                echo "good";
                header('location:../index.php');
            }
            else{
//                echo "not good";
                header('location:../index.php');
            }

    }

    public function getUser($email){
        $sql = "SELECT * FROM `accounts` WHERE email = '{$email}'";
        $query = $this->bdd->DataBaseConnexion()->prepare($sql);
        $query->execute();

        return $query->fetch();
    }

    public function check_login(){

        $sql="SELECT `username`,`password`, `email` FROM accounts WHERE username= '$this->username' AND password = '$this->password'";
        $query = $this->bdd->DataBaseConnexion()->prepare($sql);
        $query->execute();
        $result = $query->fetch();
//        password_verify($_POST['password'],
        if($this->password == $result['password'] AND
            $this->username == $result['username'])
        {
            echo "successfully co";
            $_SESSION['username'] = htmlspecialchars($result['username']);
            $_SESSION['password'] = htmlspecialchars($result['password']);
            $_SESSION['email'] = $result['email'];
          header('location:../pages/home.php');
        }else
        {
            echo "wrong password and/or username";
            header('location:../index.php');
        }

    }

//    public function test(){
//        return $this->email;
//    }

    public function updateDB($dataName, $dataValue)
    {
        $sql = "UPDATE accounts SET {$dataName} = '{$dataValue}' WHERE email='$this->email'";
        $stmt = $this->bdd->DataBaseConnexion()->prepare($sql);
        $stmt->execute();
    }

//    public function update($username, $password, $email){
//        $sql = "UPDATE `accounts` SET `username`='$username', `password`='$password', `email`='$email' WHERE email='$this->email'";
//        $stmt = $this->bdd->DataBaseConnexion()->prepare($sql);
//        $stmt->execute(array(
//            'username' => $username,
//            'password'=>$password,
//            'email' =>$email
//        ));
//    }

    public function logout(){
        session_unset();
        session_destroy();
        echo 'logout success';
        header('location:../index.php');
    }

    public function deleteAccount(){
        $sql = "DELETE FROM accounts WHERE email = '$this->email'";
        $stmt = $this->bdd->DataBaseConnexion()->prepare($sql);
        $stmt->execute();

        header('location:../index.php');
    }
}