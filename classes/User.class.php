<?php
require_once('DataBaseConnection.class.php');
//session_start();

class user {
//    public $id;
    public $username;
    public $email;
    protected $password;
//    public $status;
    public $bdd;

    public function __construct($username, $email, $password){
        $this->password = $password;
        $this->username = $username;
        $this->email = $email;
        $this->bdd = new DataBaseConnexion('becode', 'root', '');
    }


    public function signup($username, $email, $password){

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

        $sql="SELECT * FROM accounts WHERE username= '$this->username' AND password = '$this->password'";
        $query = $this->bdd->DataBaseConnexion()->prepare($sql);
        $query->execute();
        $result = $query->fetch();
//        password_verify($_POST['password'],
        if ($this->password == $result['password'] AND
            $this->username == $result['username']) {
            echo "successfully co";
          header('location:../pages/patrick.php');
        }else{
            echo "wrong password and/or username";
            header('location:../index.php');
        }

//        return $query;
    }

    public function updateDB($dataName, $dataValue)
    {
        $sql = "UPDATE `accounts` SET {$dataName} = '{$dataValue}'";
        $stmt = $this->bdd->DataBaseConnexion()->prepare($sql);
        $stmt->execute();
    }

//    public function update($email,$){
//        $sql = "UPDATE `accounts` SET `email`=$this->email, `username`=$this->username, `password`=$this->password WHERE `email`=$this->email";
//        $stmt = $this->
//    }

    public function logout(){
        session_start();
        session_destroy();

        header('location:../index.php');
    }

    public function test(){
        return 'coucou';
    }

//    public function login($user,$pass){
//        if ($this->username == $user AND $this->password == $pass){
//            return 'success log';
//            header('location:pages/home.php');
//        }elseif ($this->username == $user AND $this->password !== $pass){
//            return 'error : wrong password';
//        }elseif ($this->username !== $user AND $this->password == $pass){
//            return 'error : wrong username';
//        }else{
//            return 'error, try again';
//        }
//    }
}